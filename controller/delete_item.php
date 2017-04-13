<?php
require('model/items.php');

if (isset($_GET['delete']))
{
	$id = $_GET['id'];
	$process = new Items();
	$result = $process->delete_item($id);
	print_r($result);
}



?>