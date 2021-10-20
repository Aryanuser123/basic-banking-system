<?php
$servername = "localhost";
$username = "id17792552_aryan_user";
$password = "m5b-XF/2>+k%pZYv";
$dbname = "id17792552_customer_detail";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
}
?>