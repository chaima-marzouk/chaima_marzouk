<?php

include_once('database.php');
if (isset($_GET['suprimer'])) {
    $id = $_GET['suprimer'];
    $sup = "DELETE FROM sighnin WHERE id=$id ";
    $suprimer = mysqli_query($link, $sup);
    header('location: admin.php');
}


?>