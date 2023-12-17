<?php
session_start();
$emil=$_POST['email'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root','','bachelorent');
$sql= "SELECT user_id,first_name,last_name FROM users WHERE email='$emil' AND Passdord='$pass'";
//$sqlq=mysqli_query($con,$sql)
$result=mysqli_num_rows(mysqli_query($con,$sql));

//echo $result;
if($result==1){
    
     $get_id=mysqli_fetch_assoc(mysqli_query($con,$sql));
     $u_id=$get_id['user_id'];
     $name=$get_id['first_name']." ".$get_id['last_name'];
    // //echo $u_id;

     $_SESSION['UserId']=$u_id;
     $_SESSION['Username']=$name;
     $_SESSION['logonSuccess']=1;
    header("location: home.php");
}
else{
    $_SESSION['loginErorr']=1;
    header("location: index.php");
}
?>