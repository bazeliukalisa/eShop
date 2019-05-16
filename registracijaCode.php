<?php

include '../database.php';
// include '../pages/user.php';

if ($_POST) {
    // get database connection

    $database = new Database();
    $db = $database->getConnection();
    $user = new User($db);
    $user->Vardas = $_POST['inputName'];
    $user->Pavarde = $_POST['inputSurname'];
    $user->Email = $_POST['inputEmail'];
    $user->Slaptazodis = $_POST['inputPassword'];
    $user->PakartotasSlaptazodis = $_POST['inputPassword2'];
    $user->Lytis = $_POST['gridRadios'];
    $user->GimimoData = $_POST['birthDate'];
    $user->ArSutinka = $_POST['gridCheck1'];
    // create the user
    if ($user->create()) {

        echo "<div class='alert alert-success'>";
        echo 'Jūs užsiregistravote sėkmingai! Dabar galite prisijungti prie savo paskyros: <a href="../pages/user.php">Prisijungti</a>';
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Unable to register. Please try again.</div>";
    }
}

// 'user' object
class User {

    // database connection and table name
    private $conn;
    private $table_name = "Vartotojai";
    // object properties
    protected $id;
    public $Vardas;
    public $Pavarde;
    public $Email;
    public $Slaptazodis;
    public $PakartotasSlaptazodis;
    public $Lytis;
    public $GimimoData;
    public $ArSutinka;

    // constructor
    public function __construct($db) {
        $this->conn = $db;
    }

    // create new user record
    public function create() {
        $query = "INSERT INTO
                        " . $this->table_name . "
                    SET
                        Vardas = :inputName,
                        Pavarde = :inputSurname,
                        Email = :inputEmail,
                        Slaptazodis = :inputPassword,
                        PakartotasSlaptazodis = :inputPassword2,
                        Lytis = :gridRadios,
                        GimimoData = :birthDate,
                        ArSutinka = :gridCheck1";

        // prepare the query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->Vardas = htmlspecialchars(strip_tags($this->Vardas));
        $this->Pavarde = htmlspecialchars(strip_tags($this->Pavarde));
        $this->Email = htmlspecialchars(strip_tags($this->Email));
        $this->Slaptazodis = htmlspecialchars(strip_tags($this->Slaptazodis));
        $this->PakartotasSlaptazodis = htmlspecialchars(strip_tags($this->PakartotasSlaptazodis));
        $this->Lytis = htmlspecialchars(strip_tags($this->Lytis));
        $this->GimimoData = htmlspecialchars(strip_tags($this->GimimoData));
        $this->ArSutinka = htmlspecialchars(strip_tags($this->ArSutinka));

        // bind the values

        $stmt->bindParam(':inputName', $this->Vardas);
        $stmt->bindParam(':inputSurname', $this->Pavarde);
        $stmt->bindParam(':inputEmail', $this->Email);
        $stmt->bindParam(':inputPassword', $this->Slaptazodis);
        $stmt->bindParam(':inputPassword2', $this->PakartotasSlaptazodis);
        $stmt->bindParam(':gridRadios', $this->Lytis);
        $stmt->bindParam(':birthDate', $this->GimimoData);
        $stmt->bindParam(':gridCheck1', $this->ArSutinka);


        // execute the query, also check if query was successful
        if ($stmt->execute()) {
            return true;
        } else {
            echo "Goodbye" . mysqli_error($this->conn);
            return false;
        }
    }

}

?>
