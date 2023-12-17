<?php include('template/check_login.php');
  $pro=true;
  $pass=false;
  $post=false;
  if(isset($_SESSION['room'])){
    $pass=true;
    $pro=false;
    unset($_SESSION['room']);
  }
  if(isset($_SESSION['parking'])){
    $post=true;
    $pro=false;
    unset($_SESSION['parking']);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>

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
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link <?php if($pro==true) echo 'active' ?>" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                  <i class="fa fa-key  text-center mr-1"></i> 
                  Flat Post
                </a>
                <a class="nav-link <?php if($pass==true) echo 'active' ?>" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="true">
                  <i class="fa fa-user  text-center mr-1"></i> 
                  Roommate post
                </a>
                <a class="nav-link <?php if($post==true) echo 'active' ?>" id="Posts-tab" data-toggle="pill" href="#Posts" role="tab" aria-controls="Posts" aria-selected="<?php echo $post; ?>">
                  <i class="fa fa-building text-center mr-1"></i> 
                  Parking Post
                </a>
                
              </div>
            </div>
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
              
              <div class="tab-pane fade show <?php if($pro==true) echo 'active' ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="container">
                    <h2>Post for Flat Rent</h2>
                    <form action="flatpostcon.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="submitFlatPost"/>
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
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>  
              </div>

              <div class="tab-pane fade show <?php if($pass==true) echo 'active' ?>" id="password" role="tabpanel" aria-labelledby="password-tab">
                <div class="container">
                  <h2>Post for room mate</h2>
                  <form action="flatpostcon.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="submitroommet"/>
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
                      <label for="confirm-password">Details</label>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>



              <div class="tab-pane fade show <?php if($post==true) echo 'active' ?>" id="Posts" role="tabpanel" aria-labelledby="Posts-tab">
                <div class="container">
                  <h2>Post Your Parking Lot</h2>
                  <form action="flatpostcon.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="submitparking"/>

                    <div class="form-group ">
                        <label for="inputState">Category</label>

                        <select name="category" id="inputState" class="form-control" required>
                            <option value="">choose</option>
                            <option value="Bike">Bike</option>
                            <option value="Car">Car</option>
                        </select>

                    </div>

                    <div class="form-group" >
                        <label for="inputCity">Location</label>
                        <input required type="text" name="Location" class="form-control" id="inputCity">
                    </div>

                    <div class="form-group" >
                        <label for="inputCity">Rent</label>
                        <input required type="number" name="rent" class="form-control" id="inputCity">
                    </div>

                    <div class="form-group">
                      <label for="availableDate">Available From</label>
                      <input type="date" class="form-control"  name="available" required />
                    </div>
                    <div class="form-group">
                      <label for="TagDescription">Short description</label>
                      <input type="text" class="form-control" placeholder="Enter short description" name="tag_Descrip" required />
                    </div>
                    <div class="form-group">
                        <label for="mainImage">Main Image</label>
                        <input type="file" class="form-control" name="mainimage" required />
                    </div>

                    <div class="form-group" >
                        <label for="exampleFormControlFile1">Pictures</label>
                        <input type="file" class="form-control-file" name="images[]" multiple required>
                    </div>
                    <button type="submit" name="submitparking" class="btn btn-primary">Post</button>
                  </form>
                </div>

              </div>

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