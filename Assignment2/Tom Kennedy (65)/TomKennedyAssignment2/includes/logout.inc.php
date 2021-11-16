<?php
/*Will destroy the session when the user signs out and will return them
to the signup page */
session_start();
session_unset();
session_destroy();

header("location: ../signup.php");
exit();