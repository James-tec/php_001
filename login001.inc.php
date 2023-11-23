<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh001.inc.php';
    require_once 'functions001.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login001.php?error=emptyinput");
        exit();
}

loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login.php");
    exit ();
}
?>