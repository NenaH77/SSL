<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Strings</title>
	</head>
	<body>
	<?php
	
	echo "Hello World (double quote)<br />";
	//BEST TO USE " " INSTEAD OF ' '
	echo 'Hello World (single quote)<br />';

	$greeting = "Que";
	$target = "Onda";
	//concat string
	$phrase = $greeting . " " .$target;
	echo $phrase;
	?>

	<br />
	<?php

	//Reason why "" are preferred is cuz $phrase is still recognized from prior example
	echo "$phrase Again (dbl quotes better to use)<br />";
	//'' does not work
	echo '$phrase again(single quotes NO GOOD)<br />';
	//Best Practice
	echo "{$phrase}Again(Best practice with curly braces)<br />";


	?>


	</body>
</html>
