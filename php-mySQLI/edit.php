<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
</head>
<body>
    <form action="traitementedit.php" method="POST" >
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ;?>">
        <input type="text" name="email"placeholder="email">
        <input type="text" name="password" placeholder="password">
        <button class="submit" name="creat" type="submit">Edit</button>
    </form>

</body>
</html>


