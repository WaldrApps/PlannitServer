<?php
class Database {

    public $conn;

    //Connect to the database
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $_ENV("HOST") . ";dbname=" . $_ENV("DB_NAME"),
                $_ENV("DB_USERNAME"),
                $_ENV("DB_PASSWORD")
            );
            $this->conn->exec("set names utf8");

        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
