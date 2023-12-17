<?php
session_start();
    if(isset($_POST['submitFlatPost'])){
        $userId=$_SESSION['UserId'];
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
        echo $Details;
        $flatPostQuery="INSERT roommate VALUES(NULL,'$userId','$Number','$Email',now(),'$availableFrom','$NumberOfSeat','$Rent','$Addres','$tagDescrip','$Details',1,'$mainImageLocation')";
        $con=mysqli_connect('localhost','root','','bachelorent');
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
            header("location: roompost.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>seat rent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <style>
      body {
        background-image: url('images/SignUP.jpg');
        background-size: cover;
        background-position: center;
      }
      .container {
        background: linear-gradient(to top, rgba(255, 255, 255, 0.884),rgba(255, 255, 255, 0.884));
        margin-top: 35px;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
        padding: 25px;
        border-radius: 10px;
        max-width: 500px;
      }
      h2 {
        text-align: center;
        margin-bottom: 15px;
      }
      input[type="text"],
      input[type="email"],
      input[type="password"],
      input[type="date"],
      input[type="NID"],
      input[type="phone"],
      input[type="address"],
      select {
        border-radius: 10px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #ccc;
        width: 100%;
      }
      button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 12px 20px;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
      }
      button[type="submit"]:hover {
        background-color: #45a049;
      }
      .form-check {
        margin-bottom: 8px;
      }
      .form-check input {
        margin-right: 10px;
      }
      .form-check label {
        font-weight: normal;
      }
      @media screen and (max-width: 576px) {
        .container {
          margin-top: 20px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Post for room mate</h2>
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
          <label for="NumberofSeat">Number of Seat:</label>
          <input type="number" class="form-control" placeholder="1" name="numberOfSeat" min="1" max="10" required />
        </div>
        <div class="form-group">
          <label for="flatRent">Seat Rent:</label>
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
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
