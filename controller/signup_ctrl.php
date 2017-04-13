<?php
	require('../model/auth.php');

	/*$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];*/
	$email = "example@gmail.com";
	$username = 'john Doe';
	$password = 'example';
	$process = new Auth();
	$result= $process->sign_up($username,$email,$password);
	var_dump($result);


 ?>