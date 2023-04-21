<?php
// dades BD
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";:

//conexio a la BD
$connection = new mysqli($servername, $username, $dbname)
if($connection ->  connect_error){
    die(header("Location.error.php"));
}

//seleccionam tots registres de taula usuaris
$selectSQL = "SELECT * FROM`usuari`";
$result = mysqli_query($connection, $selectSQL) or die(mysqli_error($connection));
echo "hi ha".mysqli_num_rows($rows)." usurisregistrats.<br>";
echo '<ul>';
while ($row = mysqli_fetch_array($result)) {
    echo '<li>'.$row'[usuari]'.'</li>';
}

echo '</ul>';

?>