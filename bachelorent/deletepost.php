<?php
    include('template/check_login.php');
    $postId=$_GET['id'];
    $deleteSQL="UPDATE flat set activeStatus=false WHERE flatID='$postId'";
    $_SESSION['pro_post']=1;
    mysqli_query($con,$deleteSQL);
    header("location: profile.php");