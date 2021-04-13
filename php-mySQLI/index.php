

<?php

session_start();

    $name_session = $_SESSION['utilisateur'];


?>





<?php
    include_once('database.php');
    //selectionner les message dans la base de donnée
    $query = "SELECT * FROM messages ORDER BY id_message DESC LIMIT 0, 8";
    $results = mysqli_query($link, $query);
    $messages = mysqli_fetch_assoc($results);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat box</title>
    <link rel="stylesheet" href="./css1/style.css">
</head>
<body>
    <main method="GET">
        <div class="titleBar container">
        <h1>Welcome <?php echo $name_session; ?></h1>
        </div>

        <div>
            <form action="log_out.php"  method="POST">
        <input type="submit" class="logout"  name="LOGOUT" value="logout">
        </form>
    </div>

 
        <div class="messages container" method="GET"action="login.php">
            <ul>
                <?php foreach ($results as $row) : 
                    ?>

                    <li class="message"> 
                    <?php echo $row["temps"];  ?> - 
                    <?php echo $row["utilisateur"];  ?>  : 
                    <?php echo $row["contenu_message"];  ?> 
                    </li>

                <?php endforeach ?>
            </ul>
        </div>
        <div class="container">
            <form class="comment" action="traitement.php" method="post">
                <!-- <input type="text" name="utilisateur" id="utilisateur" placeholder="Saisir votre username"> -->
                <input type="text" name="message" id="message" placeholder="Saisir votre message">
                <input type="submit" class="envoyer" name="envoyer" value="Envoyer">
            </form>
        </div>
    </main>

</body>
</html>