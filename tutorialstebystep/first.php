<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
       username: <br>
       <input type="text" name="username"><br>

       password:
       <input type="password" name="password"><br>

       <input type="submit" name="login" value="login">


    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $_SESSION[ "username"]
    }
?>