<?php
session_start();
include('../../database/connect.php');
include('../../helper/function.php');

extract($_POST);
$image_name = upload_image('image');

$sql ="INSERT INTO posts (title,description,image) VALUES('$title','$description','$image_name')";
$status = mysqli_query($connection,$sql);

if($status){
	$msg = 'New Post Created Successfully!';
	$alert = 'alert-success';
}else{
	$msg = 'Problem in SQL Query';
	$alert = 'alert-danger';
}

set_flush_message($msg,$alert);
header('Location:../new_post.php');
?>