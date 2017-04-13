<?php
require('model/User.php');

$user_id = 14;
$user_id;
$user = new Users();

$result = $user->get_user_details($user_id);
echo json_encode($result);




 ?>