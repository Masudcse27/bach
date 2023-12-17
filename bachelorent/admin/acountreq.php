<?php
include('../template/check_login.php');
        $type=$_GET['typ'];
        $uId=$_GET['id'];
        $sql="UPDATE users SET isAcountAccepted=1 WHERE user_id='$uId'";
        //echo $type;
        if($typ==2){
            $sql="DELETE FROM users WHERE user_id='$uId'" ; 
        }
        if(mysqli_query($con,$sql)){
            unset($_SESSION['adds']);
            unset($_SESSION['bookreq']);

           header("location: home.php");
        }
?>
