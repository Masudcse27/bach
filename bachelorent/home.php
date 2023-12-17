<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>

    <!-- CSS Part -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<!-- Body Part -->

<body style="background-color:#d7d9db">
<?php include('template/navbar.php');?>

<div class="jumbotron">
        <div class="container">
            <h1>Welcome to BacheloRent</h1>
            <p>Find your perfect home from our selection of rental properties</p>
            <form class="form-inline">
                <!-- <div class="d-flex">
                    <div class="form-group mr-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Enter location">
                    </div>
                    <button type="submit" class="btn btn-lg btn-search">Search</button>
                </div> -->
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row pt-4">
           <div class="col text-center">
                <h2 class="display-3 text-info">SERVICES</h2>
           </div> 
        </div>
        <div class="row pt-4">
            <div class="col text-center rounded">
                <a  href="flatrent.php">
                    <p class="display-1 rounded bg-success p-2 m-1">🏢</p>
                    <p class="display-5 text-success">Flat Rent</p>
                </a>
            </div>
            <div class="col text-center rounded ">
                <a  style="color:inherit;" href="roommate.php">
                    <p class="display-1 rounded bg-dark p-2 m-1">🏢</p>
                    <p class="display-5 text-success">Roommate Finder</p>
                </a>
            </div>
            <div class="col text-center rounded">
                <a href="parking.php">
                    <p class="display-1 rounded bg-warning p-2 m-1">🏢</p>
                    <p class="display-5 text-success">Parking Search</p>
                </a>
            </div>
            
            <div class="col text-center rounded">
                <a href="maid.php">
                    <p class="display-1 rounded bg-danger p-2 m-1">🏢</p>
                    <p class="display-5 text-success">Maid Service</p>
                </a>
            </div>
            <div class="col text-center rounded">
                <a href="internetservices.php">
                    <p class="display-1 rounded bg-primary p-2 m-1">🏢</p>
                    <p class="display-5 text-success">Internet Service</p>
                </a>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col text-center">
                 <h2 class="display-3 text-info">ABOUT</h2>
            </div> 
         </div>
         <div class="row">
                <div class="col text-center">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Aliquid unde iure quia perspiciatis, in accusantium praesentium velit autem ex,
                         excepturi, dolor maiores eos voluptatem ab. Recusandae, totam. Minus, voluptates et?Lorem, ipsum dolor sit amet consectetur
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam eos nam ex. Eligendi reiciendis non
                          vitae itaque. Cumque officia, modi sed nam eaque magnam, quos ipsum atque nisi consequatur quibusdam. 
                          adipisicing elit. Corrupti at odit fugit tenetur ab doloremque blanditiis in
                          qui, eligendi quod tempore itaque vero nisi explicabo odio fuga culpa consectetur voluptates.
                       </p> 
                </div>
         </div>
    </div>
    <!-- <div class="container">
        <div class="row pt-4">
           <div class="col text-center">
                <h2 class="display-3 text-info">SERVICES</h2>
           </div> 
        </div>
        <div class="row pt-6 justify-content-md-center text-center">
            <div class="col-mid-6 text-center rounded ">
                <a class="navbar-brand" href="flatrent.php">
                    <p class="display-1 rounded bg-success p-3 m-4 ">🏢</p>
                    <p class="display-5 text-success">Flat Rent</p>
                </a>
            </div>
            <div class="col-mid-6 text-center rounded ">
                <a class="navbar-brand" href="roommate.php">
                    <p class="display-1 rounded bg-dark p-3 m-4">🏢</p>
                    <p class="display-5 text-success">Roommate Finder</p>
                </a>
            </div>
            <div class="col-mid-6 text-center rounded">
                <a class="navbar-brand" href="">
                    <p class="display-1 rounded bg-warning p-3 m-4">🏢</p>
                    <p class="display-5 text-success">Parking Search</p>
                </a>
            </div>
        </div>
        <div class="row pt-6 justify-content-md-center">
            
            <div class="col-mid-6 text-center rounded">
                <a class="navbar-brand" href="">
                    <p class="display-1 rounded bg-secondary p-3 m-4">🏢</p>
                    <p class="display-5 text-success">Expense</p>
                </a>
            </div>
            <div class="col-mid-6 text-center rounded">
                <a class="navbar-brand" href="">
                    <p class="display-1 rounded bg-danger p-3 m-4">🏢</p>
                    <p class="display-5 text-success">Booking Service</p>
                </a>
            </div>
            <div class="col-mid-6 text-center rounded">
                <a class="navbar-brand" href="">
                    <p class="display-1 rounded bg-primary p-3 m-4">🏢</p>
                    <p class="display-5 text-success">Internet Service</p>
                </a>
            </div>
        </div>
        
    </div> -->

    


    <!-- Do Here -->


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