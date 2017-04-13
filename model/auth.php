<?php
session_start();
require('db.php');
require('status.php');

class Auth extends DB
{
	protected $email;
	protected $password;
	protected $username;	
	public function login($email , $password)
	{
		$this->email = $this->test_input($email);
		$this->password = $this->test_input($password);
		$this->password = $this->pass_encrypt($password);
		$user_exit = $this->user_exit($this->email,$this->password);
		if ($user_exit)
		{
			// set session and redirect....
			
			//Session::add_to_session('user_id' , $user_exit);
			$_SESSION['user_id'] = $user_exit;
			$url = '../index.php';
			header('location:'.$url);
			exit;
		}
		else
		{
			return  Status::returnMessage(0,'invalid credentials');
		}
	}

	public function sign_up($username,$email,$password)
	{
		$this->username = $this->test_input($username);
		$this->email = $this->test_input($email);
		$this->password = $this->test_input($password);
		$email_exit = $this->email_exit($this->email);
		if($email_exit)
		{
			return Status::returnMessage(0,'email already exits');
		}
		else
		{
			$this->password = $this->pass_encrypt($this->password);

			$insert_user = $this->insert('Users',['user_name'=>"$this->username",'email'=>"$this->email",'password'=>"$this->password"]);
			if ($insert_user)
			{
				$login = $this->login($this->email , $this->password);
				if ($login)
				{
					return Status::returnMessage(1, 'Login successfull');
				}
				else
				{
					return Status::returnMessage(0,'Error login user in ');
				}
			}
			else
			{
				return  Status::returnMessage(0,'Error Signing up');
			}
		}
	}

	public function forget_password()
	{

	}

	public function logout()
	{

	}

	protected function pass_encrypt($password)
	{
		return md5($password);
	}

	protected function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
}






 ?>