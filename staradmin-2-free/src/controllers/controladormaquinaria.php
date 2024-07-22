<?php
include_once '../database.php';
include_once '../models/maquinaria.php';

$database = new Database();
$db = $database->getConnection();

$maquinaria = new Maquinaria($db);

$action = isset($_GET['action']) ? $_GET['action'] : die('ERROR: Action not specified.');

switch($action) {
    case 'read':
        $stmt = $maquinaria->read();
        $num = $stmt->rowCount();

        if($num > 0) {
            $maquinarias_arr = array();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $maquinaria_item = array(
                    "idMaquinaria" => $idMaquinaria,
                    "matricula" => $matricula,
                    "tipo_combustible" => $tipo_combustible,
                    "estado" => $estado
                );
                array_push($maquinarias_arr, $maquinaria_item);
            }
            echo json_encode($maquinarias_arr);
        } else {
            echo json_encode(array("message" => "No maquinarias found."));
        }
        break;

    case 'create':
        $data = json_decode(file_get_contents("php://input"));

        $maquinaria->matricula = $data->matricula;
        $maquinaria->tipo_combustible = $data->tipo_combustible;
        $maquinaria->estado = $data->estado;

        if($maquinaria->create()) {
            echo json_encode(array("message" => "Maquinaria was created."));
        } else {
            echo json_encode(array("message" => "Unable to create maquinaria."));
        }
        break;

    case 'update':
        $data = json_decode(file_get_contents("php://input"));

        $maquinaria->idMaquinaria = $data->idMaquinaria;
        $maquinaria->matricula = $data->matricula;
        $maquinaria->tipo_combustible = $data->tipo_combustible;
        $maquinaria->estado = $data->estado;

        if($maquinaria->update()) {
            echo json_encode(array("message" => "Maquinaria was updated."));
        } else {
            echo json_encode(array("message" => "Unable to update maquinaria."));
        }
        break;

    case 'delete':
        $data = json_decode(file_get_contents("php://input"));

        $maquinaria->idMaquinaria = $data->idMaquinaria;

        if($maquinaria->delete()) {
            echo json_encode(array("message" => "Maquinaria was deleted."));
        } else {
            echo json_encode(array("message" => "Unable to delete maquinaria."));
        }
        break;

    default:
        echo json_encode(array("message" => "Invalid action."));
        break;
}
?>
