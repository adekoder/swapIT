<?php
require('model/items.php');
if (isset($_GET['search']))
{
	$searchterm = $_GET['searchterm'];
	echo $searchterm;
	$process = new Items();
	$result = $process->search_item($searchterm);
	echo json_encode($result);
}


 ?>