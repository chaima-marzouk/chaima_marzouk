<?php

// se connecter à MySQL
$link = mysqli_connect('localhost', 'root', '', 'cb');

// tester la connexion
if(mysqli_connect_errno()){
    echo 'erreur de connexion : '. mysqli_connect_error();
    die();
}



// $link = mysqli_connect('localhost', 'root', '', 'ilyass');

// if (mysqli_connect_errno()) {
//     echo 'hdchi maaakhdamch ahmadi : '.mysqli_connect_error();
//     die();
// }
// include_once('database.php');

// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = $_POST['password'];


// $mysql_n = "SELECT * FROM `ma table` WHERE 'name'" ;
// $mysql_e = "SELECT * FROM `ma table` WHERE 'email'" ;
// $mysql_p = "SELECT * FROM `ma table` WHERE 'password'" ;

// $mysql_n = mysqli_query($link,$mysql_n);
// $mysql_e = mysqli_query($link,$mysql_e);
// $mysql_p = mysqli_query($link,$mysql_p);



// $ins = "INSERT INTO `sighnin`(`name`, `email`, `username`, `password`)";
// $ins .="VALUES ('$name', '$email', '$password')";

// $result = mysqli_query($link , $ins);


?>






