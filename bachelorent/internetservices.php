<?php
include('template/check_login.php');
$typ="Internet_Service";
$sql="SELECT * FROM serveses where servestype='$typ'";
if(isset($_POST['search'])){
    $location=$_POST['address'];
    $sql="SELECT * FROM serveses where servestype='$typ' AND serviselocation LIKE '%$location%'"; 
}
$data=mysqli_query($con,$sql);
?>
 <!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive HTML Table With Pure CSS - Web Design/UI Design</title>
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:gray">
<div class="container-xl p-3">
<?php include('template/navbar.php');?>
        <h2 class="text-center py-4">Find ISP in your area</h2>
        <div>
        <form action="internetservices.php" method="POST">
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
    <main class="table">
        <section class="table__header">
            
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> SN </th>
                        <th> Name </th>
                        <th>Number</th>
                        <th> Address </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while($row=mysqli_fetch_assoc($data)){
                    ?>
                     <tr>
                        <td> <?php echo $i ?> </td>
                        <td> <?php echo $row['name']?> </td>
                        <td> <?php echo $row['phonenumber'] ?> </td>
                        <td><?php echo $row['serviselocation'] ?></td>
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
</body>

</html>