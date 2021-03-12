<?php
include_once('database.php');

$email = $_POST['email'];
$password = $_POST['Password'];



$email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $query = "SELECT * FROM sighnin in WHERE Email='$email' && password ='$Password'";
    $signin = mysqli_query($link, $query);

    $rowcount = mysqli_num_rows($signin);

    

?>