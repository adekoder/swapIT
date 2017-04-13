<?php
	require('../model/auth.php');

	/*$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];*/
	$email = "abc@gmail.com";
	$password = '123456789';
	$process = new Auth();
	$result = $process->login($email,$password);
	print_r($result);

 ?>