<!DOCTYPE html>

<html lang = "en">
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="UTF-8">
    <title>Big Music Login Page</title>
</head>

<body>
    <div id = "head1">
    <img src="logo.png" alt="logo" width="100" height="100">
    <h1>Big Music</h1>
    </div>

    <section class ="signup-form">
    <h1> Please login here: </h1>
    <!--signup input fields for username and password, once entered will redirect to
    includes/login.php where the further functions are -->
    <div id= "signup">
        <form action ="includes/login.inc.php" method ="post">
            <input type="text" name="uid" placeholder="Username...">
            <br>
            <br>
            <input type="password" name="pass" placeholder="Password...">
            <br>
            <br>
            <button type="submit" name="submit">login</button>
        </form>
    </div>

    <?php
    /*error handlers, each one of these has a function attatched to it in
    functions.inc.php */
if (isset($_GET["error"]))
{
    if ($_GET["error"] == "emptyinput")
    {
        echo "<h1>Fill in all fields</h1>";
    }
    else if ($_GET["error"] == "wronglogin")
    {
        echo "<h1>incorrect login information</h1>";
    }
    else if ($_GET["error"] == "passnotverified")
    {
        echo "<h1>Password is incorrect, remember passwords are case sensitive</h1>";
    }
}
?>
    </section>


<form action ="includes/signup.inc.php" method ="post">
    <h1> New to our site? Sign up here! </h1>
    <div id="button2">
    <button type="submit" name="submit">Sign up here!</button>
    </div>
</form>

</body>





</html>