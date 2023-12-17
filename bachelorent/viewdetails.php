<?php
    include('template/check_login.php');
    $pID=$_GET['id'];
    $typ=$_GET['type'];
    if($typ==1){
        $getSQL="SELECT * FROM flat WHERE flatID=$pID";
        $getData=mysqli_fetch_assoc(mysqli_query($con,$getSQL));
        $sql_pic= "SELECT flatImagesLocation FROM flatimages WHERE 	faltPostID='$pID'";
        $TotalImg=mysqli_num_rows(mysqli_query($con,$sql_pic));
        $picture_loc=mysqli_query($con,$sql_pic);
    }
    else{
        $getSQL="SELECT * FROM roommate WHERE roomID=$pID";
        $getData=mysqli_fetch_assoc(mysqli_query($con,$getSQL));
        $sql_pic= "SELECT roommateImageLocation FROM roommateimages WHERE roommatePostId='$pID'";
        $TotalImg=mysqli_num_rows(mysqli_query($con,$sql_pic));
        $picture_loc=mysqli_query($con,$sql_pic);
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
    <style>
      @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
        body {
            background-color: #f8f9fa;
            font-family: 'Lato', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
        }

        .play-font {
            font-family: 'Playfair Display', serif;
        }

        .poppins-font {
            font-family: 'Poppins', sans-serif;
        }

        .lato-font {
            font-family: 'Lato', sans-serif;
        }

        .btn {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar {
            /* background-color: #2b4c0a5c !important; */
            /* color: #ffffff; */
            font-size: 18px;
            padding-bottom: 0px;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav a {
            /* color: #ffffff !important; */
            font-weight: bold;
            margin-right: 20px;
        }

        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #343a40;
            min-width: 140px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 6px;
            text-decoration: none;
            display: block;
            margin-left: 5px;
        }

        .dropdown-content a:hover {
            background-color: #8aaccc;
            margin-right: 0px;
            border-radius: 5px;
            margin-left: 0px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        .dropdown-menu {
            padding: 0;
            min-width: 0;
        }

        .dropdown-menu .dropdown-item {
            background-color: #343a40;
            font-weight: bold;
            font-size: 18px;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #8aaccc;
        }

        .copy-text {
            margin-top: 30px;
        }

        .sub-menu-wrap {
            position: absolute;
            top: 100%;
            right: 10%;
            width: 250px;
            max-height: 0px;
            overflow: hidden;
            transition: max-height 0.5s;
        }

        .sub-menu-wrap.open-menu {
            max-height: 400px;
        }

        .sub-menu {
            background-color: #343a40;
            padding: 20px 20px 0px;
            margin: 10px 1px;
            z-index: 9999;
            position: relative;
            border-radius: 5px;
        }

        .user-info {
            display: flex;
            align-items: center;

        }

        .user-info h3 {
            font-weight: 400;
            color: black;
            font-size: 25px;
            font-family: sans-serif;
        }

        .user-info h3 a {
            font-weight: 600;

            font-size: 12.5px;
            text-decoration: none;
        }

        .user-info h3 :hover {
            color: aliceblue;
        }

        .user-info img {
            width: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .user-pic {
            width: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .sub-menu hr {
            border: 0;
            height: 1px;
            width: 100%;
            background: #cccccc;
            margin: 10px 0 10px;
        }

        .sub-menu-link {
            display: flex;
            align-items: center;
            color: #f68b1f;
            margin: 15px 0;
            text-decoration: none;

        }

      .sub-menu-link p {
          width: 100%;
      }

      .sub-menu-link:hover p {
           font-weight: 800;
          text-decoration: none;
      }
      
      /* @media screen and (max-width: 576px) {
          
      } */
    </style>
    <link rel="stylesheet" href="css/navbar.css">
</head>

<!-- Body Part -->

<body style="background-color:#d7d9db">
<?php include('template/navbar.php');?>

         <div class="container-xl p-3">
            <div class="row">
                <div class="col-9 p-2 pl-4 pb-4">
                    <h1 class="text-indigo-700 border-bottom border-right rounded border-warning border-2"><?php echo $getData['taglineDescription'] ?></h1>
                </div>
                <div class="col-3 p-2 pl-4 ">
                    <h1 class="text-secondary al"></h1>
                </div>
            </div>    
            
            <div class="row">
                    <div class="col">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> -->
                                <?php 
                                    $i=1;
                                    while($i<=$TotalImg){
                                ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"></li>
                                <?php
                                    $i+=1;
                                    }
                                    $i=1;
                                ?>
                                </ol>
                                <div class="carousel-inner">
                                    
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo $getData['mainImage']; ?>" alt="0">
                                </div>
                                <?php
                                while($pic=mysqli_fetch_assoc($picture_loc)){
                                ?>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo $pic['flatImagesLocation']; ?>" alt="<?php echo $i ?>">
                                </div>
                                <?php 
                                $i+=1;
                                }
                                ?>
                                <!-- <div class="carousel-item">
                                    <img class="d-block w-100" src="images/P2.jpg" alt="2">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/P3.jpg" alt="3">
                                </div> -->
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                    </div>
                    <div class="col pt-4">
                        <h4 class="text-white bg-info rounded p-2 text-center">Description</h4>
                           
                            <div class="container">
                                <div class="property-description-wrap property-section-wrap" id="property-description-wrap">
                                    <div class="block-wrap">
                                        <div class="block-content-wrap row">
                                            <ul class="list-2-cols list-unstyled">
                                                <div class="row p-4">
                                                    <div class="col">
                                                        <li><strong>Contract number: </strong><?php echo $getData['phoneNumber_F'] ?></li>
                                                        <li><strong>Email: </strong><?php echo $getData['email_F'] ?><strong><br></strong></li>
                                                        <li><strong>Available from: </strong><?php echo $getData['availableDate'] ?></li>
                                                        <li><strong>Rent: </strong><?php echo $getData['flatRent'] ?></li>
                                                    </div>
                                                    <div class="col">
                                                        <li class="prop_status"><strong>Details: </strong><?php echo $getData['flatDetails'] ?></li>
                                                        <li class="interior"><strong>Location: </strong><?php echo $getData['flatLocation'] ?></li>
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            
                        <!-- <h4 class="text-white bg-info rounded p-2 text-center">Address</h4>
                          <div class="container">  
                            <div class="property-address-wrap property-section-wrap" id="property-address-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap p-2">
                                                  <a class="btn btn-primary btn-slim" href="http://maps.google.com/?q=Gulshan,%20Dhaka%201212" target="_blank"><i class="houzez-icon icon-maps mr-1"></i> Open on Google Maps</a>    
                                    </div>
                                    <div class="block-content-wrap">
                                        <ul class="list-2-cols list-unstyled">
                                            <div class="row">
                                                <div class="col">
                                                    <li class="detail-address"><strong>Address</strong> <span>Gulshan Avenue</span></li>
                                                    <li class="detail-city"><strong>City</strong> <span>Dhaka</span></li>
                                                    <li class="detail-state"><strong>State/county</strong> <span>Gulshan</span></li>
                                                </div>
                                                <div class="col">
                                                    <li class="detail-zip"><strong>Zip/Postal Code</strong> <span>1212</span></li>
                                                    <li class="detail-area"><strong>Area</strong> <span>Restaurants Space Rent in Gulshan</span></li>
                                                     <li class="detail-country"><strong>Country</strong> <span>Bangladesh</span></li>	
                                                </div>            	
                                            
                                            </div>
                                        </ul>	
                                    </div>
                            
                                    
                                </div>
                            </div>
                          </div> -->

                    </div>
                </div>
                <!-- <div class="row pt-4">
                    <div class="col">
                        <h4 class="text-white bg-info rounded p-2 text-center">Overview</h4>
                           <div class="container">
                                <div class="property-overview-wrap property-section-wrap" id="property-overview-wrap">
                                    <div class="block-wrap">
                                        
                                            <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                                        </div>
                                            <div class="d-flex property-overview-data">
                                                <ul class="list-unstyled flex-fill">
                                                <li class="property-overview-item"><strong>Restaurants Space</strong></li>
                                                <li class="hz-meta-label property-overview-type">Property Type</li>
                                                
                                            </ul>
                                            <ul class="list-unstyled flex-fill">
                                                <li class="property-overview-item">
                                                    <i class="houzez-icon icon-car-1 mr-1">
                                                    </i> <strong>02</strong></li>
                                                    <li class="hz-meta-label h-garage">Garages</li>
                                                </ul>
                                                <ul class="list-unstyled flex-fill">
                                                    <li class="property-overview-item">
                                                        <i class="houzez-icon icon-real-estate-dimensions-plan-1 mr-1">
                                                        </i> <strong>5200</strong></li>
                                                        <li class="hz-meta-label h-area">Sq Ft</li>
                                                    </ul>
                                                    <ul class="list-unstyled flex-fill">
                                                        <li class="property-overview-item">
                                                            <i class="houzez-icon icon-calendar-3 mr-1"></i>
                                                            <strong>2018</strong>
                                                            </li>
                                                            <li class="hz-meta-label h-year-built">Year Built</li>
                                                        </ul>		
                                        </div>
                                    </div>
                                </div>
                           </div> 
                    </div>
                    <div class="col"></div>
                </div> -->
                <div class="row pt-4">
                    <div class="col d-flex justify-content-center">
                        <a type="button" class="btn btn-success btn-lg" href="booking.php?id=<?php echo $pID; ?>&type=<?php echo $typ; ?>">Book Now</a>
                        <!-- <button ></button> -->
                
                </div>


            <div>

            </div>
        </div>


      <!-- Do here -->




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