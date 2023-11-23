<?php
include_once 'header001.php';
?>

<section class="signup-form">
    <h2>Sign up</h2>
    <form action="includes/signup001.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="passsword" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign up</button>
</form>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "invalidpasswordsdon'tmatch") {
        echo "<p>Password doesn't match!</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>something went wrong, try again!</p>";
    }
    else if ($_GET["error"] == "useranmetaken") {
        echo "<p>Username already taken!</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
    }
}
?>
</section>

<?php
include_once 'footer001.php';
?>