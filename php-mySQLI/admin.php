<?php

    include_once('database.php');

    $select = "SELECT * FROM sighnin ORDER BY name";
    $result = mysqli_query($link,$select);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <title>Admin page</title>
</head>
<body>
    <table>
        <thead>
            <th>Nom</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mot de passe</th>
        </thead>
    
    <?php foreach ($result as $row) : ?>
    
    <tr>
            <td> <?php echo $row['name']; ?></td>
            <td> <?php echo $row['username']; ?></td>
            <td> <?php echo $row['email']; ?></td>
            <td> <?php echo $row['password']; ?></td>
            <td> <a href="delet.php?suprimer=<?php echo $row['id']; ?>">suprimer</a>
            <a href="edit.php?id=<?php echo $row['id']; ?>">editer</a>
        </td>

    </tr>
        <?php endforeach ?>

     </table>
</body>
</html>