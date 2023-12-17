<?php include('../template/check_login.php');
  $pro=true;
  $pass=false;
  $post=false;
  if(isset($_SESSION['bookreq'])){
    $pass=true;
    $pro=false;
    unset($_SESSION['bookreq']);
  }
  if(isset($_SESSION['adds'])){
    $post=true;
    $pro=false;
    unset($_SESSION['adds']);
  }
    $getrequestSQL="SELECT * FROM users WHERE isAcountAccepted=0";
    $TotalImg=mysqli_num_rows(mysqli_query($con,$getrequestSQL));
    $data=mysqli_query($con,$getrequestSQL);
    $getbokrequestSQL="SELECT * FROM bookingrequest WHERE reqStatus=1";
    $TotalBookReq=mysqli_num_rows(mysqli_query($con,$getbokrequestSQL));
    $bkdata=mysqli_query($con,$getbokrequestSQL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>

    <!-- CSS Part -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<!-- Body Part -->
<body style="background-color:black">
      <section class="py-5 my-5">
        <div class="container">
          <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <div class="profile-tab-nav border-right" style="background-color: gray">
              
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link <?php if($pro==true) echo 'active' ?>" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> 
                  Acount Request <span class="p-1 ml-4" style="background-color:red"><?php echo $TotalImg ?></span>
                </a>
                <a class="nav-link <?php if($pass==true) echo 'active' ?>" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="true">
                  Booking Request <span class="p-1 ml-4" style="background-color:red"><?php echo $TotalBookReq?></span>
                </a>
                <a class="nav-link <?php if($post==true) echo 'active' ?>" id="Posts-tab" data-toggle="pill" href="#Posts" role="tab" aria-controls="Posts" aria-selected="<?php echo $post; ?>">
                  Add servers
                </a>
              </div>
            </div>
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
              
                <div class="tab-pane fade show <?php if($pro==true) echo 'active' ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <main class="table">
                        <section class="table__body">
                            <table>
                                <thead>
                                    <tr>
                                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Number <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> NID number <span class="icon-arrow">&UpArrow;</span></th>
                                        <th>  </th>
                                        <th>  </span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;
                                        while($row=mysqli_fetch_assoc($data)){
                                    ?>
                                    <tr>
                                        <td> <?php echo $row['user_id'] ?> </td>
                                        <td> <?php echo $row['first_name']." ".$row['last_name'] ?> </td>
                                        <td> <?php echo $row['UserNumber'] ?> </td>
                                        <td><?php echo $row['NID'] ?></td>
                                        <td><a class="btn btn-success" href="acountreq.php?id=<?php echo $row['user_id'] ?>&typ=1">Accept</a> </td>
                                        <td><a class="btn btn-danger" href="acountreq.php?id=<?php echo $row['user_id'] ?>&typ=2">Cancel</a> </td>
                                    </tr>
                                    <?php
                                        $i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </section>
                    </main>
                </div>

              <div class="tab-pane fade show <?php if($pass==true) echo 'active' ?>" id="password" role="tabpanel" aria-labelledby="password-tab">
              <main class="table">
                        <section class="table__body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Method</th>
                                        <th>Number</th>
                                        <th>TranscationI</th>
                                        <th>Amount</th>
                                        <th>  </th>
                                        <th>  </span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;
                                        echo $i;
                                        while($rows=mysqli_fetch_assoc($bkdata)){
                                            
                                    ?>
                                    <tr>
                                        <td> <?php echo $rows['userId'] ?> </td>
                                        <td> <?php echo $rows['paymentMathod']?></td>
                                        <td> <?php echo $rows['number'] ?> </td>
                                        <td> <?php echo $rows['transcationId'] ?> </td>
                                        <td><?php echo $rows['amount'] ?></td>
                                        <td><a class="btn btn-success" href="bokingreq.php?id=<?php echo $rows['postid_b'] ?>&typ=1">Accept</a> </td>
                                        <td><a class="btn btn-danger" href="bokingreq.php?id=<?php echo $rows['postid_b'] ?>&typ=2">Cancel</a> </td>
                                    </tr>
                                    <?php
                                        $i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </section>
                    </main>
              </div>



              <div class="tab-pane fade show <?php if($post==true) echo 'active' ?>" id="Posts" role="tabpanel" aria-labelledby="Posts-tab">
              <div class="container">
                  <h2>Add Services</h2>
                  <form action="addservices.php" method="POST">
                    <div class="form-group">
                        <select name="category" id="inputState" class="form-control" required>
                            <option value="">choose category</option>
                            <option value="Booking_Service">Maid Service</option>
                            <option value="Internet_Service">Internet Service</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="address">Name</label>
                      <input type="address" class="form-control" id="address" placeholder="Sadik" name="name" required />
                    </div>
                    <div class="form-group">
                      <label for="PhoneNumber">Phone Number</label>
                      <input type="phone" class="form-control" placeholder="01XXXXXXXXX" name="number" required />
                    </div>

                    
                    <div class="form-group">
                      <label for="TagDescription">NID Number</label>
                      <input type="text" class="form-control" placeholder="54XXXXXXXXX" name="serNID" required />
                    </div>
                    <div class="form-group">
                      <label for="confirm-password">Location</label>
                      <input type="text" class="form-control" placeholder="Enter Location"  name="address" rows="3" required />
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
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