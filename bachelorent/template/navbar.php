<nav class="navbar navbar-expand-lg navbar-light"style="background-color: #ffffff;">
        <a class="navbar-brand" href="home.php"><img src="images/Bachelo.png" width="90" height="50"><span
                style="color: #FF5722;">Bachelo</span><span style="color: rgb(12,90,219);">Rent</span></a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php"><span id="nav_item">Home</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#" ><span id="nav_item">About Us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span id="nav_item">Contact Us</span></a>
                </li>
                <li class="nav-item dropdown">
                    <img src="images/profile.jpg" class="user-pic" onclick="toggleMenu()">
                    <div class="sub-menu-wrap" id="subMenuW">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="images/profile.jpg">
                                <h3><a href="profile.php">user name<?php  //echo $_SESSION['Username'] ?></a></h3>
                            </div>
                            <hr>

                            <a href="post.php" class="sub-menu-link">
                                <p>List Your Space</p>
                            </a>
                            <!-- <a href="#" class="sub-menu-link">
                                <p>Manage Your Expanse</p>
                            </a> -->
                            <a href="logout.php" class="sub-menu-link">
                                <p>Logout</p>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>