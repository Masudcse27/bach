<?php
include('../template/check_login.php');
$first_name=$_POST['fastName'];
$last_name=$_POST['lastName'];
//$email=$_POST['email'];
//$blood_g=$_POST[''];
$gender=$_POST['gender'];
$Date_of_Birth=$_POST['dateOfBirth'];
//$NID=$_POST['NID'];
$UserAddress=$_POST['address'];
$UserNumber=$_POST['phone'];
echo $first_name.$last_name;
$updateQuery="UPDATE users SET first_name='$first_name',last_name='$last_name',gender='$gender',Date_of_Birth='$Date_of_Birth',UserAddress='$UserAddress',UserNumber='$UserNumber' ";
if(mysqli_query($con,$updateQuery)){
    $_SESSION['profileUpdate']=1;
    $name=$first_name." ".$last_name;
    
     $_SESSION['Username']=$name;
}
else  $_SESSION['profileUpdate']=0;
header("location: ../profile.php");