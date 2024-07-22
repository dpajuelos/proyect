<?php
class Database {
    private $host = "localhost";
    private $db_name = "bdagregados";
    private $username = "root";  // Ajusta el usuario si es necesario
    private $password = "";  // Ajusta la contraseña si es necesario
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
