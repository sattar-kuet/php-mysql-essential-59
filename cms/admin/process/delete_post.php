<?php
session_start();
include('../../database/connect.php');
include('../../helper/function.php');
extract($_GET);
unlink("../../public/uploads/$image");

$sql = "DELETE FROM posts WHERE id=$id";

mysqli_query($connection, $sql);

header('Location:../all_post.php');


?>