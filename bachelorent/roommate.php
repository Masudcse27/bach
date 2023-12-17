<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Find Your seat</title>

    <!-- CSS Part -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
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
            background-color: #343a40;
            color: #ffffff;
            font-size: 18px;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav a {
            color: #ffffff !important;
            font-weight: bold;
            margin-right: 20px;
        }

        .jumbotron {
            background-image: url(images/Home.jpg);
            background-size: cover;
            background-position: center;
            height: 550px;
        }

        .jumbotron h1 {
            color: #ffffff;
            font-size: 60px;
            font-weight: bold;
            margin-top: 150px;
        }

        .jumbotron p {
            color: #ffffff;
            font-size: 24px;
            margin-top: 40px;
            max-width: 600px;
        }

        .btn-search {
            background-color: #17a2b8;
            color: #ffffff;
            font-weight: bold;
            border-radius: 10px;
            padding: 12px 30px;
            font-size: 18px;
        }

        .btn-search:hover {
            background-color: #138496;
        }

        .card {
            margin-top: 40px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-radius: 10px 10px 0 0;
            height: 200px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: bold;
            font-size: 24px;
        }

        .card-text {
            margin-top: 20px;
            color: #6c757d;
            font-size: 18px;
        }

        .card-link {
            margin-top: 20px;
            color: #17a2b8;
            font-size: 18px;
            font-weight: bold;
        }

        .card-link:hover {
            text-decoration: none;
            color: #138496;
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

        footer {
            margin-top: 80px;
            background: linear-gradient(to top, rgba(74, 53, 53, 0.252), rgba(74, 53, 53, 0.252));
            padding: 50px 0px 20px;
        }

        .footer-col {
            margin-bottom: 30px;
        }

        .footer-menu ul {
            margin: 0px;
            padding: 0px;
        }

        .footer-menu ul li {
            display: block;
        }

        .footer-menu ul li a {
            color: #000;
            text-decoration: none;
        }

        .footer-col h3 {
            position: relative;
            margin-bottom: 31px;
        }

        .footer-col h3:before {
            content: "";
            position: absolute;
            width: 70px;
            height: 2px;
            background: #ed1c24;
            bottom: -11px;
        }

        .copy-text {
            margin-top: 30px;
        }

        @media screen and (max-width: 576px) {
            .jumbotron {
                height: 400px;
            }

            .jumbotron h1 {
                font-size: 40px;
                margin-top: 100px;
            }

            .jumbotron p {
                font-size: 18px;
            }

            .card {
                width: 100%;
                margin: 10px 0;
            }
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

        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #343a40;
            color: white;
            border-radius: 5px;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
            border-radius: 5px;
        }
    </style>
    <link rel="stylesheet" href="css/navbar.css">
</head>

<!-- Body Part -->

<body style="background-color:#d7d9db">
<?php include('template/navbar.php');?>
    <div class="container">
        <h2 class="text-center py-4">Find A Room To Rent</h2>
        <form action="" method="POST">
        <div class="row py-3">
            <div class="col-sm-3">
                <div class="form-group">
                    <!-- <select name="Division" id="" class="form-control">
                        <option value="">Choose Division</option>
                        <option value="">Dhaka</option>
                    </select> -->
                    <input type="text" class="form-control"  placeholder="Enter Address" name="address" required />
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="form-group">
                    <button type="submit" name="search"class="btn btn-primary px-5">Search</button>
                    <!-- <a class="btn btn-primary px-5" href="#" role="button">Search</a> -->
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="container">
        <?php
        $getHouse_sqlQuery="SELECT * FROM roommate 
        WHERE activeStatus=true
        ORDER BY roomID DESC";
          if(isset($_POST['search'])){
            $location=$_POST['address'];
            $getHouse_sqlQuery="SELECT * FROM roommate 
            WHERE activeStatus=true AND location LIKE '%$location%'
            ORDER BY roomID DESC";
         }
        $con=mysqli_connect('localhost','root','','bachelorent');
        $getHouse=mysqli_query($con,$getHouse_sqlQuery);
        ?>
        <div class="row">
            <?php
                while($flats=mysqli_fetch_assoc($getHouse)){ 
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $flats['frontImage'] ?>" alt="Property image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $flats['taglineDescription'] ?></h5>
                        <p class="card-text">Available From <?php echo $flats['availableDate_R'] ?></p>
                        <p class="card-text">Available Seat <?php echo $flats['numberOfSeat'] ?></p>
                        <p class="font-weight-bold pt-3">৳ <?php echo $flats['seatRent'] ?>/Seat</p>
                        <a href="viewdetails.php?id=<?php echo $flats['roomID'] ?>&type=2" class="card-link">View Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
    <br>
    <br>
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>

        let subMenuW = document.getElementById("subMenuW");

        function toggleMenu() {
            subMenuW.classList.toggle("open-menu")
        }
    </script>
</body>

<!-- Footer Part -->
<footer>
    <div class="container" id="contact-us-id">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-col footer-about">
                    <p class="phone-text">+880 1632 11 4251</p>
                    <p>admin@bachelorent.com</p>
                    <p>Dhaka,Bangladesh</p>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="footer-col footer-menu">
                    <h3>Useful Links</h3>
                    <ul>
                        <li> <a href="">About Us</a> </li>
                        <li> <a href="">Corporate Profile</a> </li>
                        <li> <a href="">Our Team</a> </li>
                        <li> <a href="">Portfolio</a> </li>
                        <li> <a href="">Our Office</a> </li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="footer-col footer-menu">
                    <h3>Useful Links</h3>
                    <ul>
                        <li> <a href="">About Us</a> </li>
                        <li> <a href="">Corporate Profile</a> </li>
                        <li> <a href="">Our Team</a> </li>
                        <li> <a href="">Portfolio</a> </li>
                        <li> <a href="">Our Office</a> </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-col footer-menu">
                    <h3>Useful Links</h3>
                    <ul>
                        <li> <a href="">About Us</a> </li>
                        <li> <a href="">Corporate Profile</a> </li>
                        <li> <a href="">Our Team</a> </li>
                        <li> <a href="">Portfolio</a> </li>
                        <li> <a href="">Our Office</a> </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12">
                <div class="copy-text text-center">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; BacheloRent 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>