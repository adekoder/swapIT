<?php
require('model/items.php');

$process = new Items();
$result = $process->get_all_items();
echo json_encode($result);





 ?>