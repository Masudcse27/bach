<?php
$first_name=$_POST['fastName'];
$last_name=$_POST['lastName'];
$email=$_POST['email'];
//$blood_g=$_POST[''];
$gender=$_POST['gender'];
$Date_of_Birth=$_POST['dateOfBirth'];
$NID=$_POST['NID'];
$UserAddress=$_POST['address'];
$UserNumber=$_POST['phone'];
$Passdord=$_POST['password'];
$confirmPassword=$_POST['confirm-password'];
//$acountCreateDate=now();
if($Passdord!=$confirmPassword){
    $_SESSION['passworNotMatch']=1;
    header("location: SignUp.php");
}
$con=mysqli_connect('localhost','root','','bachelorent');
$nidExistsSql= "SELECT COUNT(NID) as isNidExists FROM users WHERE NID='$NID'";
$nidCount=mysqli_fetch_assoc(mysqli_query($con,$nidExistsSql));
if($nidCount['isNidExists']>0){
    //echo $NID;
     $_SESSION['nidExists']=1;

     header("location: SignUp.php");
}
$emailExistsSql= "SELECT COUNT(email) as isEmailExists FROM users WHERE email='$email'";
$emailCount=mysqli_fetch_assoc(mysqli_query($con,$emailExistsSql));
if($emailCount['isEmailExists']>0){
    //echo $NID;
     $_SESSION['emailExists']=1;

     header("location: SignUp.php");
}
$signupSql="INSERT INTO users VALUES(NULL,'$first_name','$last_name','$email','$gender','$Date_of_Birth','$NID','$UserAddress','$UserNumber','$Passdord','now()',0)";
if(!mysqli_query($con,$signupSql)){
    $_SESSION['Reg_error']=1;
    header("location: SignUP.php");
}
else{
    $_SESSION['reg_suc']=1;
    header("location: index.php");
}
