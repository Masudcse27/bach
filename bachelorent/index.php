<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <style>
      body {
        background-image: url(images/Login.jpg);
        background-size: cover;
        background-position: center;
      }
      .container {
        background: linear-gradient(to top, rgba(255, 255, 255, 0.884),rgba(255, 255, 255, 0.884));
        margin-top: 130px;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
        padding: 40px;
        border-radius: 10px;
        max-width: 400px;
      }
      h2 {
        text-align: center;
        margin-bottom: 30px;
      }
      input[type="email"],
      input[type="password"] {
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
        margin-bottom: 20px;
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
      <h2>Login</h2>
      <form action="confirmLogin.php" method="POST">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control"  placeholder="Enter password" name="password" required />
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
        <p>Don't have acount? <a href="SignUp.php">Signup</a></p>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
