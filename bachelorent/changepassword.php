<?php

include('template/check_login.php');
$userId=$_SESSION['UserId'];
$Old_pass=$_POST['old'];
$new_pass=$_POST['new_pass'];
$new_pass_confirm=$_POST['new_pass_conf'];
$_SESSION['pro_pass']=1;
if($new_pass!=$new_pass_confirm){
    $_SESSION['new_pass_not']=1;
    header("location: profile.php");
}
$getPasssql="SELECT Passdord FROM users where user_id='$userId' AND Passdord='$Old_pass'";
$result=mysqli_num_rows(mysqli_query($con,$getPasssql));
if($result==1){
    $changePassSql="UPDATE users SET Passdord='$new_pass' where user_id='$userId'";
    mysqli_query($con,$changePassSql);
    $_SESSION['pass_chang']=1;
}
else{
    $_SESSION['old_pass_not']=1;
}
header("location: profile.php");