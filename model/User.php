<?php
	require('status.php');
	require('db.php');
	class Users extends DB
	{

		public function get_user_details($user_id)
		{
			$fetch = $this->select_specific('Users', ['id','user_name','email']," where id = $user_id",false);
			if($fetch)
			{
				return $fetch;
			}
			else
			{
				return Status::returnMessage(0,'No Record');
			}
		}
	
	}





 ?>