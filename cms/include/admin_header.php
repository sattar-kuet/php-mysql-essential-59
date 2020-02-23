<?php
session_start();
include('header.php'); 
include('../database/connect.php');
include('../helper/function.php'); 

if(!isset($_SESSION['user']['id'])){
  header('Location:login.php');
}
?>