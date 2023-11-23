<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset ="utf-8">
        <title>Php project 001</title>
</head>
<body>

<nav>
    <div class="wrapper">
        <ul>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<li><a href='profile001.php'>Profile page</a></li>";
               echo "<li><a href='logout001.php'>Log out</a></li>";  
            }
            else {
                echo "<li><a href='signup.php'>Sign up</a></li>";
               echo "<li><a href='login001.php'>Log in</a></li>";  
            }
         
            ?>
</ul>
</div>
</nav>

<div class="wrapper">