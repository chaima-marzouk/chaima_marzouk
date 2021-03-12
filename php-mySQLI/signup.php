<?php

include_once('database.php');
if (isset($_POST['submit'])) 
{

$name = $_POST['fullname'];
$userId = $_POST['userId'];
$email = $_POST['Email'];
$password = $_POST['Password'];


// if($rowcount > 1){
    
//     $signin = mysqli_query($link, $query);
//     $rowcount = mysqli_num_rows($signin);
//     printf("username already taken");
// }

// else {
// $check = "INSERT INTO `sighnin`( `name`, `email`, `username`, `password`)";
// $check .= "VALUES ('$name','$email','$userId','$password')";
// $resultat .= mysqli_query($link,$check);

// echo "inscription successfull";
// }


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
    if (mysqli_num_rows($res_e) > 0) {
        echo "Email already taken";
        // $email_error = "Email already taken";
        // $_SESSION['email_error'] = $email_error;
        header('Location: signup.php?error=alreadytaken');
    }
    else {
        if (!empty($_POST['UserName']) && !empty($_POST['Email']) && !empty($_POST['userId']) && !empty($_POST['Password'])) {
            $query = "INSERT INTO `sighnin` (name, email, username, password)";
            $query .= " VALUES ('$name', '$Email', '$userId', '$password')";
            $results = mysqli_query($link, $query);
            header('Location: index.php');
        }
    }
    
}

  
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST">
<?php
if(isset($_GET['error'])){
    echo $_GET['error'];
}

?>
        <input type="text" placeholder="entre your email" name="Email">
        <input type="text" placeholder="fullname" name="fullname">
        <input type="text" placeholder="userId" name="userId">
        <input type="password" placeholder="entre your password" name="Password"> 
        <button type="submit" name="submit">submit</button>  
</form>
</body>
</html>