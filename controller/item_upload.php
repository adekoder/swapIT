<?php
require('model/items.php');


if (isset($_FILES['uploadFile']))
{
	$item_name = $_POST['item_name'];
	$item_details = $_POST['item_details'];
	$exchangable_items = $_POST['exchangable_items'];
	$item_image = $_FILES['uploadFile'];
	$exchangable_items = serialize(json_encode($exchangable_items));
	$process = new Items();
	$result = $process->upload_item($item_name,$item_details,$exchangable_items,$item_image);
	print_r($result);
}






 ?>