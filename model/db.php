<?php
	require('dbconfig.php');
	
	class DB
	{
		private $db_host = DBHOST;
		private $db_user = DBUSER;
		private  $db_password = DBPASSWORD;
		private  $db = DBNAME;
		protected  $connection;

		public function __construct()
		{
			 $this->dbConnect($this->db_host,$this->db_user,$this->db_password,$this->db);
		}

		public  function dbConnect($host,$user,$pass,$db)
		{
			
			
				$this->connection= new mysqli($host,$user,$pass,$db);
				if ($this->connection->connect_error)
				{
				
					die("Connection Error" . $this->connection->connect_error);
				}
				else
				{
					//echo 'successfull';
					//return $connection;
				}
			
		}

		public  function user_exit($email,$password)
		{
			$query = "select id from Users where email = '$email' and password = '$password'";
			$result = $this->connection->query($query);
			if($result->num_rows > 0 )
			{
				while($row = $result->fetch_assoc())
				{
					//echo $row['id'];
					return $row['id'];
				}
			}
			else
			{
				return false;
			}
		}
		public  function email_exit($email)
		{
			$query = "select id from Users where email = '$email' ";
			$result = $this->connection->query($query);
			if ($result->num_rows > 0)
			{	
				return true;
			}
			else
			{
				//echo $this->connection->error;
				return false;
			}
		}

		public  function insert_user($username, $email, $password)
		{
			$query = "insert into Users(user_name,email,password) Values('$username', '$email','$password')";
			$result = $this->connection->query($query);
			if ($result)
			{
				return true;
			}
			else
			{
				//echo $this->connection->error;
				return false;
			}
		}

		public function insert($TABLENAME,$columns_value_list = [])
		{
			print_r($columns_value_list);
			$column_list = array();
			$values = array();
			foreach($columns_value_list as $column => $value)
			{
				array_push($column_list,$column);
				array_push($values,"'".$value."'");
				
			}

			$column_list = join(',',$column_list);
			$values = join(',',$values);
			
			$query =  "insert into $TABLENAME ($column_list)
						VALUES($values)";
			$result = $this->connection->query($query);
			if ($result)
			{
				return true;
			}
			else
			{
				echo  $this->connection->error;
				return false;
			}
		}

		public function delete($TABLENAME, $where_clause)
		{
			$query = "delete from $TABLENAME $where_clause";
			$result = $this->connection->query($query);
			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}

		}
		public function select_all($TABLENAME)
		{
			$query = "select * from $TABLENAME";
			$result = $this->connection->query($query);
			$query_result = array();
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					array_push($query_result,$row);
				}	
				return $query_result;
			}	
			else
			{
				return false;
			}
		}
		public function select_specific($TABLENAME, $column_list = [] , $Where_clause = null, $all = true)
		{
			$columns = join(',',$column_list);
			echo $where_clause;
			if(!$where_clause == null)
			{

				$query = "select $columns from $TABLENAME ";
			}
			else
			{
				$query = "select $columns  from $TABLENAME  $where_clause";
			}
			//echo $query;
			$result = $this->connection->query($query);
			if ($result->num_rows > 0)
			{
				if ($all)
				{
					return $result->fetch_all();
				}
				else
				{
					return $result->fetch_assoc();
				}
				
			}
			else
			{
				echo $result->error;
				return false;
			}
		}
	
		public function search($TABLENAME , $field,$value)
		{
			$query = "select * from  $TABLENAME where $field like '%$value%'";
			$result = $this->connection->query($query);
			$query_result = array();
			if ($result->num_rows > 0)
			{

				while($row = $result->fetch_assoc() )
				{
					array_push($query_result,$row) ;
			
				}
				return $query_result;
			}	
			else
			{
				echo $this->connection->error;
				return false;
			}
		}
		public function get_id_where($TABLENAME,$column , $value)
		{
			$query  = "select id from  $TABLENAME where $column = '$value'%";
			$result = $this->connection->query($query);
			if ($result->num_rows > 0)
			{
				return $row = $result->fetch_assoc();
			}
			else
			{
				return false;
			}
		}
		


	}

	//$test = new DB();


?>