<!--
Name: Angelica Dinh
Class: Server-Side Languages
Assignment: Week 1 Project Part 2
Date Nov 1, 2014
-->


<?php
//Pull in the values from the form
function customer_name(){
	$firstname = $_POST["fname"];
	$lastname = $_POST["lname"];
	$username = $_POST["uname"];
	$password = $_POST["password"];

	return array("First name: " => $firstname, "Last name: " => $lastname, "User name: " => $username);
}
$customer = customer_name();


//Create a function that saves the avatar image upload into an "images" subdirectory.

function image_file(){
	$uploaddir = './images/'; //directory for uploaded files
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	//$ok=1;

	$file_type = $_FILES['userfile']['type'];//file type variable

	// file type only allows png and jpg
	if($file_type == "image/png" || $file_type == "image/jpeg"){

		//conditional if a file is uploaded,
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){//moves uploaded file to a specific location which is images
		  echo "<br /> File " . basename($_FILES['userfile']['name']) . " is valid, and was successfully uploaded.\n";
		} else {
		  echo "<br /> Possible file upload attack!\n";
		}
	} else {
		echo "<br /> Please upload only JPG or PNG files. <br>";
	}
	return $avatar = './images/' . $_FILES['userfile']['name'];
}


//Blowfish - Encrypt Password

	$password = "secret";
	$hash_format = "$2y$10$"; //"2y" tells php to use blowfish, "10" how many times php should run encryption
	$salt = "s1dkfjal5krjwqor8uq9e8"; //generates in the beginning part of the resulting hash
	$format_and_salt = $hash_format . $salt; //take the format and salt and put them together
	$hash = crypt($password, $format_and_salt); //then pass those into a crypt function
	echo "<br />Password: " . $hash;



	//foreach item in fields as attribute(key) and data(value)
	foreach ($customer as $attribute => $customer){
			echo "<br />" . $attribute . $customer;
	}

	echo "<img src='" . image_file() . "' />";


