<?php
include('../template/check_login.php');
        $type=$_GET['typ'];
        $pId=$_GET['id'];
        $sql="UPDATE bookingrequest SET reqStatus=0 WHERE postid_b='$pId'";
        mysqli_query($con,$sql);

        $sql="UPDATE flat SET activeStatus=0,boking=1 WHERE flatID='$pId'";
        //echo $type;
        if($type==2){
            $sql="UPDATE flat SET activeStatus=1 WHERE flatID='$pId'"; 
        }
        if(mysqli_query($con,$sql)){
            $_SESSION['bookreq']=1;
            unset($_SESSION['adds']);
           header("location: home.php");
        }
?>
