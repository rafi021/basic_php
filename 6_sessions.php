<?php
/*
A session is a way to store information (in variables) to be used across multiple pages.
*/

// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "red";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";


// remove all session variables
session_unset();

print_r($_SESSION);

// destroy the session
session_destroy();
?>

</body>
</html>