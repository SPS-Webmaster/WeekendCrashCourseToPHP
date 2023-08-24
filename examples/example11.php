<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testing some PHP</title>
</head>
<body>
<h1>Testing some PHP Code Below!</h1>
<?php
//This will set a constant variable with the name of PI and a value of 3.14
define("PI", 3.14);
echo PI;//Will show the value of the PI variable which is 3.14
echo pi."<br /><br />";//Will show the string “pi” instead of the value of 3.14

//Define a constant array to use
define("TRUCKS", [
  "Chevy",
  "Ford",
  "Nissan"
]);
echo TRUCKS[0]."<br /><br />";
var_dump(TRUCKS);echo "<br /><br />";//var_dump is very useful for debugging and will show data type of the variable
var_dump(PI);echo "<br /><br />";//Will var_dump the constant for PI
?>
</body>
</html>