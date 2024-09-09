<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "buku_tamu";

$db = mysqli_connect($hostname, $username, $password, $database_name);

// Check connection
if ($db->connect_error) {
    echo "database koneksi error " ;
    die("error!");
}

?>