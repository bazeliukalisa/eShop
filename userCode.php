<?php
include '../database.php';


class UserLogin {

    public $Vardas;
    public $Email;
    public $Slaptazodis;
    private $conn;
    private $db;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login() {
        try {
            $sql = "SELECT * FROM Vartotojai WHERE Vardas='".$this->Vardas."' AND Email='".$this->Email."'";
            $query = $this->conn->prepare($sql);
            $query->bindParam(":inputName", $this->Vardas);
            $query->bindParam(":inputEmail", $this->Email);
            $query->execute();
            $returned_row = $query->fetch(PDO::FETCH_ASSOC);

            
            if ($query->rowCount() > 0 && $this->Slaptazodis == $returned_row['Slaptazodis']) {
                session_start();
                $_SESSION['user_session'] = $returned_row['id'];
                return true;
            } else {
             return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Check if the user is already logged in
    public function is_logged_in() {
        // Check if user session has been set
        if (isset($_SESSION['user_session'])) {
            return true;
        } else {
            return false;
        }
    }

    // Redirect user

    public function redirect($url) {
        header("Location: $url");
    }

    // Log out user
    public function log_out() {
        // Destroy and unset active session
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

}

if ($_POST) {

    $database = new Database();
    $db = $database->getConnection();
    $login = new UserLogin($db);
    $login->Vardas = $_POST['inputName'];
    $login->Email = $_POST['inputEmail'];
    $login->Slaptazodis = $_POST['inputPassword'];


    echo ($login->login()) ? $login->redirect('../pages/home.php') : '<h2 class="alert-danger text-center">Atsiprašome, prisijungti nepavyko.</h2>';
}
?>