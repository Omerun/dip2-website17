<?php
// $host = "localhost";
// $username = "id17909777_patipan";
// $password = "Jackman@2516";
// $database = "id17909777_website";

$host = "localhost";
$username = "root";
$password = "";
$database = "website";

$con = mysqli_connect("$host", "$username", "$password", "$database");

if (!$con) {
    header("Location: ../../errors/dberror.php");
    die();
}
