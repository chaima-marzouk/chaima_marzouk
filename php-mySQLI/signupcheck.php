<?php

include_once('database.php');
if (isset($_POST['submit'])) 
{

$name = $_POST['name'];
$userId = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];




    $sql_u = "SELECT * FROM sighnin WHERE username='$userId'";
    $sql_e = "SELECT * FROM sighnin WHERE Email='$email'";
    $res_u = mysqli_query($link, $sql_u);
    $res_e = mysqli_query($link, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        // echo "Username already taken";
        // $name_error = "Username already taken";
        // $_SESSION['name_error'] = $name_error;
        header('Location: signup.php?error=alreadytaken');
    } 
    else if (mysqli_num_rows($res_e) > 0) {
        echo "Email already taken";
        // $email_error = "Email already taken";
        // $_SESSION['email_error'] = $email_error;
        header('Location: signup.php?error=alreadytaken');
    }
    else {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
            $query = "INSERT INTO `sighnin`(`name`, `email`, `username`, `password`)";
            $query .= " VALUES ('$name', '$email', '$userId', '$password')";
            $results = mysqli_query($link, $query);
            header('Location: index.php');
        }
    }
    
}

  
?>