<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
</head>
<body>
<?php
if (isset ($_GET["success"])){

?>
<p style= "background-color: aqua;color: blue;"><?php echo $_GET ["success"] ?></p>
<?php
}
 if (isset ($_GET["error"])){

?>
<p style= "background-color: pink;color: white;"><?php echo $_GET ["error"] ?></p>
<?php
 }
 ?>

    <form action="output.php" method="POST">
    <div>
    <label for ="username:">Username</label>
    <input type="text" name="Username" id="username">

     </div>

     <div>
    <label for ="Email:">Email</label>
    <input type="Email" name="Email" id="Email">

     <div>
    <label for ="password1">Password</label>
    <input type="password" name="password1" id="password1">
</div>

<div>
    <label for ="confirm-password">ConfirmPassword</label>
    <input type="confirm-password" name="confirm-password" id="confirm-password1">
</div>
     
    <input type ="submit" value="Register">
     
</form>
</body>
</html>