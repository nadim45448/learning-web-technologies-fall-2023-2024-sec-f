<?php
session_start();
if (isset($_SESSION['user'])) 
{
    $user = $_SESSION['user'];


    echo "Welcome, " . $user['name'] . "!<br>";
    echo "Phone: " . $user['phone'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
} else {
    header('Location: login.php');
}
?>
