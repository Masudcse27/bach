<?php include('template/check_login.php');
    $postId=$_GET['id'];
    $getPost="SELECT * FROM flat WHERE flatID='$postId'";
    $post_data=mysqli_fetch_assoc(mysqli_query($con,$getPost));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Edit post</title>
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
      <h2>Edit Your Post</h2>
      <form action="confirmpostupdate.php" method="POST">
        <input type="hidden" name="id"  value="<?php echo $postId ?>">
        <div class="form-group">
          <label for="PhoneNumber">Phone Number</label>
          <input type="phone" class="form-control" value="<?php echo $post_data['phoneNumber_F'] ?>" name="number" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" value="<?php echo $post_data['email_F'] ?>" name="email" required />
        </div>
        <div class="form-group">
          <label for="availableDate">Available From</label>
          <input type="date" class="form-control" value="<?php echo $post_data['availableDate'] ?>" name="available" required />
        </div>
        <div class="form-group">
          <label for="flatRent">Flat Rent:</label>
          <input type="number" class="form-control" value="<?php echo $post_data['flatRent'] ?>" name="rent" min="1000" required />
        </div>
        <div class="form-group">
          <label for="address">Enter Address:</label>
          <input type="address" class="form-control" id="address" value="<?php echo $post_data['flatLocation'] ?>" name="address" required />
        </div>
        <div class="form-group">
          <label for="TagDescription">Short description</label>
          <input type="text" class="form-control" value="<?php echo $post_data['taglineDescription'] ?>" name="tag_Descrip" required />
        </div>
        <div class="form-group">
          <label for="confirm-password">Flat Details</label>
          <textarea class="form-control"  name="details" rows="3" required ><?php echo $post_data['flatDetails'] ?></textarea>
        </div>
        <button type="submit" name="submitFlatPost" class="btn btn-primary">Update</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
