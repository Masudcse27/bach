<?php
include('template/check_login.php');
$postId=$_POST['id'];
$Number=$_POST['number'];
$Email=$_POST['email'];
$availableFrom=$_POST['available'];
$Rent=$_POST['rent'];
$Addres=$_POST['address'];
$tagDescrip=$_POST['tag_Descrip'];
$Details=$_POST['details'];
$_SESSION['pro_post']=1;
$postEditsql="UPDATE flat SET phoneNumber_F='$Number',email_F='$Email',availableDate='$availableFrom',flatRent='$Rent',flatLocation='$Addres',taglineDescription='$tagDescrip',	flatDetails='$Details' WHERE 	flatID='$postId'";
mysqli_query($con,$postEditsql);
header("location: profile.php");