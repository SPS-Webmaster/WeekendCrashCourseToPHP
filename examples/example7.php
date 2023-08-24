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
$name = "John";
$age = 25;
echo 'My name's '.$name.' and I am '.$age.' years old.';
//Will throw error “Parse error: syntax error, unexpected 's' (T_STRING), expecting ';' or ',' in /opt/lampp/htdocs/test/test.php on line 15"
?>
</body>
</html>