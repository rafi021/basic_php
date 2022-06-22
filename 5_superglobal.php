<?php 
/*
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION

*/

/*Globals */
// $x = 75;
// $y = 25; 

// function addition() {
//   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// addition();
// echo $z;


/*SERVER */
// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// echo $_SERVER['SERVER_PORT'];

?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php 
/*_REQUEST & _POST */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
?>



















?>