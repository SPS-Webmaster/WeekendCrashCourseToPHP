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
$age_inc = 1;
$user_age = “25”;//Stimulates variable being set from input form and assumed it is a string
settype($user_age, "integer"); // $user_age is now 25   (integer)
$new_age = $age_inc+$user_age;
echo "Next year I will be ".$new_age." years old.";
//This will output “Next year I will be 251 years old." on the page instead of adding the numbers together
?>
</body>
</html>