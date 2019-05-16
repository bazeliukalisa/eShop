<?php
include '../database.php';
class HiLogin {
    public $Vardas;
    private $conn;
    private $db;
    public function __construct($db) {
        $this->conn = $db;
    }
}
$database = new Database();
$db = $database->getConnection();
$hiLogin = new HiLogin($db);
$hiLogin->Vardas = $_POST['inputName'];
echo 'Welcome, ' . $hiLogin->Vardas;
?>