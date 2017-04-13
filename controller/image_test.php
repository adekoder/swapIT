<?php
		require('model/items.php');

		//echo sys_get_temp_dir();


		echo getcwd();

		if (isset($_POST['upload']))
		{
			$file = $_FILES['uploadFile'];
			if($file['error'] == UPLOAD_ERR_OK)
			{
				if($file['size'] <= 1048576)
				{
					if (in_array($file['type'] , ['image/jpg','image/png','image/jpeg']))
					{
						$sha1 = sha1(rand(111,9999));
						$filename = $sha1.basename($file['name']);
						//echo $filename;
						$destination = getcwd().'/items_images/'.$filename;
						//move_uploaded_file($file['tmp'], $destination);
						if(move_uploaded_file($file['tmp_name'], $destination))
						{
							echo $destination;
							echo "upload success";
						}
						else
						{	echo $destination;
							echo 'upload faild';
						}
					}
					else
					{
						echo $file['type'];
					}
				}
				else
				{

					echo 'file too big '. $file['size'];
				}
			}else
			{
				echo 'error uploading file';
				//echo $file['error'];
			}
		}
		




 ?>