<?php
class Article {

    protected $id;
    protected $kategorija;
    protected $pavadinimas;
    protected $aprasymas;
    protected $kaina;
    protected $mazasPaveikslelis;
    protected $didelisPaveikslelis;
    protected $arUzsakyta;

    public function __construct($row) {
        $this->id = $row['id'];
        $this->kategorija = $row['Kategorija'];
        $this->pavadinimas = $row['Pavadinimas'];
        $this->aprasymas = $row['Aprasymas'];
        $this->kaina = $row['Kaina'];
        $this->mazasPaveikslelis = $row['MazasPaveikslelis'];
        $this->didelisPaveikslelis = $row['DidelisPaveikslelis'];
        $this->arUzsakyta = $row['ArUzsakyta'];

        }
// sukur clase veido , kad ir tuscia
}

include 'pages/proceduros.php';
$conn = mysqli_connect('localhost', 'root', '', 'Eshop');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT * FROM Prekes';
$publications = array();
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $publications[] = new $row['Kategorija']($row);
}
mysqli_close($conn);
foreach ($publications as $item) {
    $item->printItem();
    echo "<br>" . get_class($item);
}

?>

