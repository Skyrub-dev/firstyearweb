<?php

if (isset($_POST["submit"]))
{
    /*Initialising global variables*/
    $username = $_POST["uid"];
    $pass = $_POST["pass"];
    /*Using 'connect.inc.php' to actually connect to the database first, then
    using 'functions.inc.php' to grab the functions which have been set on the
    error handlers below */
    require_once 'connect.inc.php';
    require_once 'functions.inc.php';

    /*Error handlers*/
    /*If the user does not enter any information into the username and password
    text boxes, the URL will change to represent an error, in this case
    '?error=emptyinput' in addition, the site also echos to the user that the
    fields have not been entered*/
    if (emptyInputLogin($username, $pass) !== false)
    {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    /*If the login is successful, the program initialises this function which
    is represented in 'functions.inc.php' */
    loginUser($connection, $username, $pass);
}
/*if nether of these error handlers have been met, the site will simply return
the user to 'login.php' */
else
{
    header("location: ../login.php");
    exit();
}