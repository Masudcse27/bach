<?php
session_start();
$emil=$_POST['email'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root','','bachelorent');
$sql= "SELECT * FROM admintab WHERE adminEmail='$emil' AND adminPassword='$pass'";
//$sqlq=mysqli_query($con,$sql)
$result=mysqli_num_rows(mysqli_query($con,$sql));

//echo $result;
if($result==1){
     $_SESSION['logonSuccess']=1;
    header("location: home.php");
}
else{
    $_SESSION['loginErorr']=1;
    header("location: index.php");
}
?>