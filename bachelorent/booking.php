<?php 
    include('template/check_login.php');
    $pID=$_GET['id'];
    $getSQL="SELECT flatRent FROM flat WHERE flatID=$pID";
    $getData=mysqli_fetch_assoc(mysqli_query($con,$getSQL));
    $rent=$getData['flatRent'];
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
      <h2>You have to pay 50% rent for 1st month.Amount of 50%rent is <?php echo ceil($rent/2); ?> TK</h2>
      <h2>Acount Number: </h2>
      <form action="bookingcon.php" method="POST">
      <input type="hidden"name="type" value="Flat"/>
      <input type="hidden"name="pid" value="<?php echo $pID ?>"/>
      <input type="hidden"name="amount" value="<?php echo ceil($rent/2); ?>"/>
        <div class="form-group">
            <select name="method" id="inputState" class="form-control" required>
                <option value=""> Select Payment Method</option>
                <option value="Bkash">Bkash</option>
                <option value="Nagad">Nagad</option>
                <option value="Rocket">Rocket</option>
            </select>
        </div>
        <div class="form-group">
          <label for="PhoneNumber">Phone Number</label>
          <input type="phone" class="form-control" placeholder="01XXXXXXXXX" name="number" required />
        </div>
        <div class="form-group">
          <label for="PhoneNumber">Transaction Number</label>
          <input type="phone" class="form-control" placeholder="580XXX" name="transaction" required />
        </div>
        <button type="submit" name="submitFlatPost" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
