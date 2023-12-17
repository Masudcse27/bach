<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Sign Up</title>
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
      <h2>Sign Up</h2>
      <form action="confirmSignUp.php" method="POST">
        <div class="form-group">
          <label for="name">Fast Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your fast name" name="fastName" required />
        </div>
        <div class="form-group">
          <label for="name">Last Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your last name" name="lastName" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required />
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select class="form-control" id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dateOfBirth">Date of Birth:</label>
          <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required />
        </div>
        <div class="form-group">
          <label for="NID">NID:</label>
          <input type="NID" class="form-control" id="NID" placeholder="Enter NID Number" name="NID" required />
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="phone" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required />
        </div>
        <div class="form-group">
          <label for="address">Enter Address:</label>
          <input type="address" class="form-control" id="address" placeholder="Enter Address" name="address" required />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required />
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password:</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password" name="confirm-password" required />
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
