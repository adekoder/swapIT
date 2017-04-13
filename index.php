<?php
	session_start();
	//require('controller/item_upload.php');
	//require('controller/search_item.php');
	//require('controller/all_items.php');
	//require('controller/delete_item.php');
	require('controller/get_user_by_id.php');
	echo $_SESSION['user_id'];
?>
<form method='POST' enctype="multipart/form-data">
	<input type="text" name='item_name' placeholder='name'>
	<input type= "text" name = 'item_details' placeholder='details'>
	<input tyoe ='text' name="exchangable_items[]" placeholder='1'>
	<input tyoe ='text' name="exchangable_items[]" placeholder='2'>
	<input tyoe ='text' name="exchangable_items[]" placeholder='3'>
	<input type="file" name="uploadFile">
	<input type="submit" name="upload">
</form>

<h1>search</h1>
<form method='GET'>
	<input type="text" name="searchterm">
	<input type="submit" name="search">
</form>

<h1>delete</h1>
<form>
	<input type='hidden' name='id' value='7'>
	<input type='submit' name='delete'>
	</form>
