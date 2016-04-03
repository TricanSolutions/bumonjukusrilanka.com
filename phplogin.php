<?php

$myusername = $_POST["email"];
$mypassword = $_POST["password"];
if ($myusername == "admin@gmail.com" && $mypassword == "admin") {
    header("location: index.html");
} else {
    $error = "Your Login Name or Password is invalid";
    echo '<script language="javascript">';
    echo 'alert("User Name or Password is Incorrect!Please check it")';
    echo '</script>';
     header("location: login.php");
}


