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
$fontColor = "blue";
$fontWeight = "bold";
$name = "John";
$age = 25;
echo "<h2 style='color:{$fontColor};font-weight:{$fontWeight};'>My name's {$name} and I am {$age} years old.</h2>";
//This will output “My name's John and I am 25 years old." in an H2 HTML element with blue and bold text on the webpage
?>
</body>
</html>