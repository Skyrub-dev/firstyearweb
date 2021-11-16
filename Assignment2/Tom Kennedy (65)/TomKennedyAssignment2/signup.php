<?php
  session_start();
?>

<!DOCTYPE html>

<html lang = "en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="UTF-8">
    <title>Big Music Signup Page</title>
</head>

<body>
    <div id = "head1">
    <img src="logo.png" alt="logo" width="100" height="100">
    <h1>Big Music</h1>
    </div>

    <section class="signup-form">
    <div id="signup">
    <h1> Please Sign up here!: </h1>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username...">
        <br>
        <br>
        <input type="password" name="pass" placeholder="Password...">
        <br>
        <br>
        <input type="password" name="passrepeat" placeholder="Enter Password again...">
        <br>
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
<div>
<?php
if (isset($_GET["error"]))
{
    if ($_GET["error"] == "emptyinput")
    {
        echo "<h1>Fill in all fields</h1>";
    }
    else if ($_GET["error"] == "invaliduid")
    {
        echo "<h1>Please choose a valid username</h1>";
    }
    else if ($_GET["error"] == "passwordsdontmatch")
    {
        echo "<h1>Passwords don't match</h1>";
    }
    else if ($_GET["error"] == "stmtfailed")
    {
        echo "<h1>Something went wrong, please try again!</h1>";
    }
    else if ($_GET["error"] == "usernametaken")
    {
        echo "<h1>Username is already taken!</h1>";
    }
    else if ($_GET["error"] == "none")
    {
        echo "<h1>successfully signed up!</h1>";
        header("location: pickaplan.php");
        exit();
    }
}
?>
</section>

<form action ="includes/login.inc.php" method ="post">
    <h1> Already have an account? login here! </h1>
    <div id="button2">
    <button type="submit" name="submit">Login here!</button>
    </div>
</form>

</body>





</html>