<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "TAdania";
$simpan = new mysqli($servername, $username, $password, $database);

if ($simpan->connect_error) {
    die("Connection failed: " . $simpan->connect_error);
}
?>
