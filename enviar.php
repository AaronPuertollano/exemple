
<?php
echo "hola, ".$_POST["nom"];

// dades BD
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";:


//conexio BD
$connection = new mysqli($servername, $username, $password, $dbname)

// inserir la BD

$userDB = $_POST['nom'];
$passDB = $_POST['pass'];
$insertSQL = "INSERT INTO `usuari` (`usuari`, `password`) VALUES ('$userDB','$passDB')"
mysqli_quert($connection, $insertSQL)

echo "Registre correcte"

?>

