<?php
include('template/check_login.php');
unset($_SESSION['room']);
unset($_SESSION['parking']);
$userId=$_SESSION['UserId'];
    if(isset($_POST['submitFlatPost'])){
        $Number=$_POST['number'];
        $Email=$_POST['email'];
        $availableFrom=$_POST['available'];
        $Rent=$_POST['rent'];
        $Addres=$_POST['address'];
        $tagDescrip=$_POST['tag_Descrip'];
        $Details=$_POST['details'];
        $mainImageName=$_FILES['mainimage']['name'];
        $mainImageTmpName= $_FILES['mainimage']['tmp_name'];
        $mainImageLocation="images/flatmainimages/".$mainImageName;
        move_uploaded_file($mainImageTmpName,$mainImageLocation);
        $flatPostQuery="INSERT flat VALUES(NULL,'$userId','$Number','$Email',now(),'$availableFrom','$Rent','$Addres','$tagDescrip','$Details',1,'$mainImageLocation',0)";
        //$con=mysqli_connect('localhost','root','','bachelorent');
        if(mysqli_query($con,$flatPostQuery)){
            $getThisPost_id_sql="SELECT max(flatID) AS post_id FROM `flat` WHERE userID='$userId'";
            $getThisPost_id_Query=mysqli_fetch_assoc(mysqli_query($con,$getThisPost_id_sql));
            $thisPost_id=$getThisPost_id_Query["post_id"];
            $t_image=count($_FILES['images']['name']);
            $i=0;
            while($i<$t_image){
                $img_name=$_FILES['images']['name'][$i];
                $img_tmp=$_FILES['images']['tmp_name'][$i];
                $img_loc="images/flatimages/".$img_name;
                move_uploaded_file($img_tmp,$img_loc);
                $img_ins="INSERT INTO flatimages VALUES('$thisPost_id','$img_loc')";
                mysqli_query($con,$img_ins);
                $i+=1;
            }
            
        }
    }
    else if(isset($_POST['submitroommet'])){ 
        $Number=$_POST['number'];
        $Email=$_POST['email'];
        $availableFrom=$_POST['available'];
        $NumberOfSeat=$_POST['numberOfSeat'];
        $Rent=$_POST['rent'];
        $Addres=$_POST['address'];
        $tagDescrip=$_POST['tag_Descrip'];
        $Details=$_POST['details'];
        $mainImageName=$_FILES['mainimage']['name'];
        $mainImageTmpName= $_FILES['mainimage']['tmp_name'];
        $mainImageLocation="images/roommatemainimage/".$mainImageName;
        move_uploaded_file($mainImageTmpName,$mainImageLocation);
        //echo $Details;
        $flatPostQuery="INSERT roommate VALUES(NULL,'$userId','$Number','$Email',now(),'$availableFrom','$NumberOfSeat','$Rent','$Addres','$tagDescrip','$Details',1,'$mainImageLocation',0)";
        //$con=mysqli_connect('localhost','root','','bachelorent');
        if(mysqli_query($con,$flatPostQuery)){
            $getThisPost_id_sql="SELECT max(roomID) AS post_id FROM `roommate` WHERE userID='$userId'";
            $getThisPost_id_Query=mysqli_fetch_assoc(mysqli_query($con,$getThisPost_id_sql));
            $thisPost_id=$getThisPost_id_Query["post_id"];
            $t_image=count($_FILES['images']['name']);
            $i=0;
            while($i<$t_image){
                $img_name=$_FILES['images']['name'][$i];
                $img_tmp=$_FILES['images']['tmp_name'][$i];
                $img_loc="images/roommateimages/".$img_name;
                move_uploaded_file($img_tmp,$img_loc);
                $img_ins="INSERT INTO roommateimages VALUES('$thisPost_id','$img_loc')";
                mysqli_query($con,$img_ins);
                $i+=1;
            }
            $_SESSION['room']=1;
        }
    }
    else{
        $catagory=$_POST['category'];
        $loccation=$_POST['Location'];
        $Rent=$_POST['rent'];
        $freeFrom=$_POST['available'];
        $tagDescrip=$_POST['tag_Descrip'];
        $mainImageName=$_FILES['mainimage']['name'];
        $mainImageTmpName= $_FILES['mainimage']['tmp_name'];
        $mainImageLocation="images/parkingmainimg/".$mainImageName;
        move_uploaded_file($mainImageTmpName,$mainImageLocation);
        $flatPostQuery="INSERT parking VALUES(NULL,'$userId','$catagory','$loccation',now(),'$freeFrom','$Rent',1,0,'$mainImageLocation','$tagDescrip')";
        if(mysqli_query($con,$flatPostQuery)){
            $getThisPost_id_sql="SELECT max(postID_pr) AS post_id FROM `parking` WHERE userID_pr='$userId'";
            $getThisPost_id_Query=mysqli_fetch_assoc(mysqli_query($con,$getThisPost_id_sql));
            $thisPost_id=$getThisPost_id_Query["post_id"];
            $t_image=count($_FILES['images']['name']);
            $i=0;
            while($i<$t_image){
                $img_name=$_FILES['images']['name'][$i];
                $img_tmp=$_FILES['images']['tmp_name'][$i];
                $img_loc="images/parkingimages/".$img_name;
                move_uploaded_file($img_tmp,$img_loc);
                $img_ins="INSERT INTO parkingimage VALUES('$thisPost_id','$img_loc')";
                mysqli_query($con,$img_ins);
                $i+=1;
            }
            $_SESSION['parking']=1;
        }
    }
    header("location: post.php");
?>

<!-- <div class="container">
      <h2>Post for Flat Rent</h2>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="PhoneNumber">Phone Number</label>
          <input type="phone" class="form-control" placeholder="01XXXXXXXXX" name="number" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required />
        </div>
        <div class="form-group">
          <label for="availableDate">Available From</label>
          <input type="date" class="form-control"  name="available" required />
        </div>
        <div class="form-group">
          <label for="flatRent">Flat Rent:</label>
          <input type="number" class="form-control" placeholder="5000" name="rent" min="1000" required />
        </div>
        <div class="form-group">
          <label for="address">Enter Address:</label>
          <input type="address" class="form-control" id="address" placeholder="Enter Address" name="address" required />
        </div>
        <div class="form-group">
          <label for="TagDescription">Short description</label>
          <input type="text" class="form-control" placeholder="Enter short description" name="tag_Descrip" required />
        </div>
        <div class="form-group">
          <label for="confirm-password">Flat Details</label>
          <textarea class="form-control" placeholder="Enter Details"  name="details" rows="3" required ></textarea>
        </div>
        <div class="form-group">
          <label for="mainImage">Main Image</label>
          <input type="file" class="form-control" name="mainimage" required />
        </div>
        <div class="form-group">
          <label for="mainImage">Other Images</label>
          <input type="file" class="form-control" name="images[]" multiple required />
        </div>
        <button type="submit" name="submitFlatPost" class="btn btn-primary">Submit</button>
      </form>
    </div> -->