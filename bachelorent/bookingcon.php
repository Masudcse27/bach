<?php
include('template/check_login.php');
        $typ=$_POST['type'];
        $PID=$_POST['pid'];
        $mathod=$_POST['method'];
        $number=$_POST['number'];
        $traNumber=$_POST['transaction'];
        $amount=$_POST['amount'];
        $useId=$_SESSION['UserId'];
        $sql="INSERT bookingrequest VALUES('$typ','$mathod','$PID','$number','$traNumber','$amount',1,'$useId')";
        if(mysqli_query($con,$sql)){
            $upsql="UPDATE flat SET activeStatus=false where flatID='$PID'";
            mysqli_query($con,$upsql);
            header("location: FlatRent.php");
        }
?>
