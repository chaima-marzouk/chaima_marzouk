<?php
if (isset($_POST['submit'])) {
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$motdepasse = $_POST['password1'];

$query = "SELECT * FROM sighnin WHERE name 







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    
<form action="" method="POST">
Votre pseudo
<input type="text" name="pseudo" required> Votre E'mail
<input type="email" name="email" required> Mot de passe
<input type="password" name="password1" required> Confirmer votre mot de passe
<input type="password" name="password2" required> 
<button type="submit" name="submit" value="submit">Submit



</form>


</body>
</html>