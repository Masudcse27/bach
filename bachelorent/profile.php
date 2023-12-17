<?php include('template/check_login.php');
  $pro=true;
  $pass=false;
  $post=false;
  if(isset($_SESSION['pro_pass'])){
    $pass=true;
    $pro=false;
    unset($_SESSION['pro_pass']);
  }
  if(isset($_SESSION['pro_post'])){
    $post=true;
    $pro=false;
    unset($_SESSION['pro_post']);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>

    <!-- CSS Part -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<!-- Body Part -->
<body style="background-color:#d7d9db">
<?php include('template/navbar.php');?>
      <section class="py-5 my-5">
        <div class="container">
          <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <div class="profile-tab-nav border-right">
              <div class="p-4">
                <div class="img-circle text-center mb-3">
                  <img src="images/profile.jpg" alt="Image" class="shadow">
                </div>
                <h4 class="text-center"><?php echo $_SESSION['Username']?></h4>
              </div>
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link <?php if($pro==true) echo 'active' ?>" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                  <i class="fa fa-key  text-center mr-1"></i> 
                  Profile
                </a>
                <a class="nav-link <?php if($pass==true) echo 'active' ?>" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="true">
                  <i class="fa fa-user  text-center mr-1"></i> 
                  Password
                </a>
                <a class="nav-link <?php if($post==true) echo 'active' ?>" id="Posts-tab" data-toggle="pill" href="#Posts" role="tab" aria-controls="Posts" aria-selected="<?php echo $post; ?>">
                  <i class="fa fa-building text-center mr-1"></i> 
                  Posts
                </a>
                
              </div>
            </div>
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
              
              <div class="tab-pane fade show <?php if($pro==true) echo 'active' ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3 class="mb-4">Your Profile</h3>

                <?php 
                  $userId=$_SESSION['UserId'];
                  $getUserDetailsQuery="SELECT * FROM users where user_id='$userId'";
                  $UserDetails=mysqli_fetch_assoc(mysqli_query($con,$getUserDetailsQuery));
                ?>
                <form action="changes/profileUpdate.php" method="POST">
                 <?php if(isset($_SESSION['pro_pass']) ) { ?>
                  <div class="alert alert-success" role="alert">
                    Profile Update successfull
                  </div>
                  <?php } unset($_SESSION['pro_pass']) ?>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Fast Name</label>
                        <input type="text" class="form-control" value="<?php echo $UserDetails['first_name'] ?>"name="fastName" required >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control"value="<?php echo $UserDetails['last_name'] ?>" name="lastName" required >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="<?php echo $UserDetails['email'] ?>"name="email" required >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="text" class="form-control"value="<?php echo $UserDetails['UserNumber'] ?>"name="phone" required >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" disabled="disabled" class="form-control"value="<?php echo $UserDetails['Date_of_Birth'] ?>"name="dateOfBirth" required >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" id="gender" name="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>NID</label>
                        <input type="text" disabled="disabled" class="form-control" value="<?php echo $UserDetails['NID'] ?>"name="NID" required >
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="<?php echo $UserDetails['UserAddress'] ?>"name="address" required >
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
              </div>

              <div class="tab-pane fade show <?php if($pass==true) echo 'active' ?>" id="password" role="tabpanel" aria-labelledby="password-tab">
                <h3 class="mb-4">Password Settings</h3>
                <?php  if(isset($_SESSION['pass_chang'])) { ?>
                  <div class="alert alert-success" role="alert">
                    Passwor Change successfull
                  </div>
                <?php } 
                unset($_SESSION['pass_chang']);
                if(isset($_SESSION['old_pass_not'])){
                ?>
                  <div class="alert alert-warning" role="alert">
                    Old passwor incorrect
                  </div>
                <?php } 
                  unset($_SESSION['old_pass_not']);
                  if(isset($_SESSION['new_pass_not'])){
                ?>
                  <div class="alert alert-warning" role="alert">
                    Passwor Not Match
                  </div>
                  <?php } 
                  unset($_SESSION['new_pass_not']);
                ?>
                <form action="changepassword.php" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Old password</label>
                          <input type="password" name="old" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>New password</label>
                          <input type="password" name="new_pass" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Confirm password</label>
                          <input type="password" name="new_pass_conf" class="form-control">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </form>
              </div>



              <div class="tab-pane fade show <?php if($post==true) echo 'active' ?>" id="Posts" role="tabpanel" aria-labelledby="Posts-tab">
                <h3 class="mb-1">Your Posts</h3>
                
                <div class="row">
                <?php
                  $getPostsql="SELECT * FROM flat Where userID ='$userId' AND activeStatus=true ORDER BY flatID DESC";
                  $getFlatpost=mysqli_query($con,$getPostsql);
                  while($flats=mysqli_fetch_assoc($getFlatpost)){
                ?>
                  <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $flats['mainImage'] ?>" alt="Property image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $flats['taglineDescription'] ?></h5>
                            <span class="card-text"><i class="fas">&#xf3c5;</i> <?php echo $flats['flatLocation'] ?></span>
                            <p class="font-weight-bold pt-3">৳ <?php echo $flats['flatRent'] ?></p>
                            <div class="row">
                              <div class="col pl-4">
                                <a style="color: white" href="updatepost.php?id=<?php echo $flats['flatID']?>" class="btn btn-primary m-2 btn-lg">Edit</a>
                              </div>
                              <div class="col-auto pr-4">
                                <a style="color: white" href="deletepost.php?id=<?php echo $flats['flatID']?>"  class="btn btn-danger align-self-end m-2 btn-lg">Delete</a>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <?php } ?>
              </div>
              <!-- <div class="tab-pane fade p-4 p-md-5" id="Expanses" role="tabpanel" aria-labelledby="Expanses-tab">
                <h3 class="mb-4">Your Expanses</h3>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Expanse 1</h5>
                            <p class="card-text">Personal</p>
                            <p class="font-weight-bold pt-1">৳ 2900</p>
                            <div class="row">
                              <div class="col pl-4">
                                <button type="button" class="btn btn-primary m-2 btn-lg">View</button>
                              </div>
                              <div class="col-auto pr-4">
                                <button type="button" class="btn btn-primary align-self-end m-2 btn-lg">Edit</button>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Expanse 2</h5>
                            <p class="card-text">Group</p>
                            <p class="font-weight-bold pt-1">৳ 2900</p>
                            <div class="row">
                              <div class="col pl-4">
                                <button type="button" class="btn btn-primary m-2 btn-lg">View</button>
                              </div>
                              <div class="col-auto pr-4">
                                <button type="button" class="btn btn-primary align-self-end m-2 btn-lg">Edit</button>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>
     


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        let subMenuW = document.getElementById("subMenuW");

        function toggleMenu() {
          subMenuW.classList.toggle("open-menu");
        }
    </script>
</body>
</html>