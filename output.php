<?php
    
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["USERNAME"];
    $email = $_POST["email"];
    $password = $_POST["password1"];
    $password = $_POST["confirm-password"];

    if (trim($username) ==""|| empty ($username)){
        echo "is empty";
    } else {
        echo"the username of user is". $_POST["Username"]."<br>";
    }

    if(trim($password) == trim($confirmPassword)){
        header("location: demo.php?success=Registration Successful");
    } else {
        header("location: demo.php?error=PasswordMismatch");
    }
    }else{
        echo"invalid method type";
    }
?>