<?php
include('../template/check_login.php');
        $type=$_POST['category'];
        $number=$_POST['number'];
        $Name=$_POST['name'];
        $Snid=$_POST['serNID'];
        $loc=$_POST['address'];
        $sql="INSERT serveses VALUES('$type','$Name','$number','$Snid','$loc')";
        
        if(mysqli_query($con,$sql)){
            $_SESSION['adds']=1;
            unset($_SESSION['bookreq']);
           header("location: home.php");
        }
?>
