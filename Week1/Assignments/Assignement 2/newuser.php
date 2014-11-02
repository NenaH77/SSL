<!--
Name: Angelica Dinh
Class: Server-Side Languages
Assignment: Week 1 Project Part 2
Date Nov 1, 2014
-->


<?php
//Pull in the values from the form
	$firstname = $_POST["fname"];
	$lastname = $_POST["lname"];
	$username = $_POST["uname"];
	$password = $_POST["password"];

	echo "First name: {$firstname} <br /> Last name: {$lastname} <br /> User name: {$username}";

//Create a function that saves the avatar image upload into an "images" subdirectory.
/*
function image_file(){
	$uploaddir = './images/'; //directory for uploaded files
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

conditional if a file is uploaded,
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    	if ($_FILES['userfile']['type'] == '.jpeg'|| $_FILES['userfile']['type'] == '.png'){
    	      return $uploadfile; 
    	}else{ 
    		return "Error! Only jpeg and png are allowed"; 
    	}
      echo "File is valid, and was successfully uploaded.\n";
    } else {
      echo "Possible file upload attack!\n";
    }*/

function image_file(){
	$uploaddir = './images/'; //directory for uploaded files
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	//conditional if a file is uploaded,
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
      echo "<br /> File is valid, and was successfully uploaded.\n";
    } else {
      echo "<br /> Possible file upload attack!\n";
    }
    //print_r($_FILES);
    return $avatar = './images/' . $_FILES['userfile']['name'];
}


//Blowfish - Encrypt Password

	$password = "secret";
	$hash_format = "$2y$10$"; //"2y" tells php to use blowfish, "10" how many times php should run encryption
	$salt = "s1dkfjal5krjwqor8uq9e8"; //generates in the beginning part of the resulting hash
	$format_and_salt = $hash_format . $salt; //take the format and salt and put them together
	$hash = crypt($password, $format_and_salt); //then pass those into a crypt function
	echo "<br />Password: " . $hash;


//Assoc Array Function

	function fields($firstname, $lastname, $username, $hash){
		$assoc = array(
			"fname" => $firstname,
			"lname" => $lastname,
			"uname" => $username,
			"password" => $hash
		);
		return $assoc;
	};
	$customer = fields($firstname, $lastname, $username, $hash);


	//foreach item in fields as attribute(key) and data(value)
	foreach ($customer as $attribute => $data){
			//echo "{<br />{$attribute} {$data}";
			}
echo "<img src='" . image_file() . "' />"


?>