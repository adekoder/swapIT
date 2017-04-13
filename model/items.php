<?php
//session_start();
require('db.php');
require('status.php');
class Items extends DB
{
	protected $item_id;
	protected $item_name;
	protected $item_details;
	protected $exchangable_items;
	protected $item_image;

	public function get_all_items()
	{
		$result = $this->select_all('Items');
		if($result)
		{
			return $result;
		}
		else
		{
			return Status::getMessage(0,'No items Available');
		}
	}
	public function search_item($item_name)
	{
		$this->item_name = $item_name;
		$result = $this->search('Items' , 'item_name',$this->item_name );
		if ($result)
		{
			return $result;
		}
		else
		{
			return Status::returnMessage('0', 'Not Found');
		}

	}
	public function upload_item($item_name ,$item_details,$exchangable_items,$item_image)
	{
		$this->item_name = $item_name;
		$this->item_details = $item_details;
		$this->exchangable_items= $exchangable_items;
		//print_r($this->exchangable_items);
		$this->item_image = $item_image;
		$user_id =  $_SESSION['user_id'];
		$image_destination = $this->image_processing($this->item_image,1048576,['image/png','image/jpg','image/jpeg']);
		//print_r($image_destination);
		if(!is_array($image_destination))
		{
			$insert_item= $this->insert('Items' , 
				['item_name'=>$this->item_name,'user_id'=>$user_id,'item_details'=> $this->item_details,
					'exchangables'=>$this->exchangable_items, 'item_image_link'=>$image_destination
				]);
			if ($insert_item)
			{
				return Status::returnMessage(1,'item uploaded ');

			}
			else
			{
				return Status::returnMessage(0,'Error uploading item');
			}

		}
		else
		{
			return Status::returnMessage(0, $image_destination);
		}

	}
	public function delete_item($item_id)
	{
		$user_id = $_SESSION["user_id"];
		$delete = $this->delete('Items' , "where id = $item_id and user_id = $user_id ");
		if($delete)
		{
			return Status::returnMessage(1,'deletion sucessfull');
		}
		else
		{
			return Status::returnMessage(0,'Delete not successfull');
		}	
	}


	protected function image_processing($image,$image_size,$image_ext = [])
	{
		if($image['error'] == UPLOAD_ERR_OK)
		{
			if($image['size'] <= $image_size)
			{
				if (in_array($image['type'] ,$image_ext))
				{
					$sha1 = sha1(rand(111,9999));
					$filename = $sha1.basename($image['name']);
					//echo $filename;
					$destination = getcwd().'/items_images/'.$filename;
					//move_uploaded_file($file['tmp'], $destination);
					if(move_uploaded_file($image['tmp_name'], $destination))
					{
						return $destination;
					}
					
				}
				else
				{
					$error = 'only png/jpg imagse allowed ';
				}
			}
			else
			{

				$error = 'file too large '.$image_size .' allowed';
			}
		}else
		{
			$error = 'error uploading file';
			//echo $file['error'];
		}

		return $error;
	}
}


?>