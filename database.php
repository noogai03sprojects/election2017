<?php
class Database {
    private $conn;

    public function __construct() {
        $username = "root";
        $hostname = "localhost";
        $password = "";
        $this->conn = new PDO("mysql:host=$hostname;dbname=election", $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function close() {
        $conn = null;
    }

    public function query($querystring) {
        return $this->conn->query($querystring);
    }

    public function exec($execstring) {
        $this->conn->exec($execstring);
    }
}
?>
