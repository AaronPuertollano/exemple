<?php
echo "hola, ".$_POST['nom'];

// definir parametres de dades BD
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";


//conexio BD
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection -> connect_error) {
    die(header('location:error.php'));
}

// inserir la BD

$userDB = $_POST['nom'];
$passDB = $_POST['pass'];
$insertSQL = "INSERT INTO `usuari` (`nom`, `password`) VALUES ('$userDB','$passDB')";
mysqli_query($connection, $insertSQL);

echo "Registre correcte";

?>

