<?php
class Maquinaria {
    private $conn;
    private $table_name = "maquinaria";

    public $idMaquinaria;
    public $matricula;
    public $tipo_combustible;
    public $estado;

    public function __construct($db) {
        $this->conn = $db;
    }

    function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function create() {
        $query = "INSERT INTO " . $this->table_name . " SET matricula=:matricula, tipo_combustible=:tipo_combustible, estado=:estado";
        $stmt = $this->conn->prepare($query);

        $this->matricula=htmlspecialchars(strip_tags($this->matricula));
        $this->tipo_combustible=htmlspecialchars(strip_tags($this->tipo_combustible));
        $this->estado=htmlspecialchars(strip_tags($this->estado));

        $stmt->bindParam(":matricula", $this->matricula);
        $stmt->bindParam(":tipo_combustible", $this->tipo_combustible);
        $stmt->bindParam(":estado", $this->estado);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    function update() {
        $query = "UPDATE " . $this->table_name . " SET matricula = :matricula, tipo_combustible = :tipo_combustible, estado = :estado WHERE idMaquinaria = :idMaquinaria";
        $stmt = $this->conn->prepare($query);

        $this->idMaquinaria=htmlspecialchars(strip_tags($this->idMaquinaria));
        $this->matricula=htmlspecialchars(strip_tags($this->matricula));
        $this->tipo_combustible=htmlspecialchars(strip_tags($this->tipo_combustible));
        $this->estado=htmlspecialchars(strip_tags($this->estado));

        $stmt->bindParam(":idMaquinaria", $this->idMaquinaria);
        $stmt->bindParam(":matricula", $this->matricula);
        $stmt->bindParam(":tipo_combustible", $this->tipo_combustible);
        $stmt->bindParam(":estado", $this->estado);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE idMaquinaria = :idMaquinaria";
        $stmt = $this->conn->prepare($query);

        $this->idMaquinaria=htmlspecialchars(strip_tags($this->idMaquinaria));

        $stmt->bindParam(":idMaquinaria", $this->idMaquinaria);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
