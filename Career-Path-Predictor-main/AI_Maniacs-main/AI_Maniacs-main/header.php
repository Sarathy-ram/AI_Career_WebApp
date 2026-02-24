<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AI MANIACS</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
</head>
<body>
<link rel="stylesheet" href="mycss/header.css">
<script src="myjs/search.js"></script>
    <!-- Header -->
    <header id="header" class="transparent-nav" style="position: fixed; top: 0;">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a class="logo" href="main.php">AI MANIACS</a>
                </div>
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search..." onkeydown="if(event.keyCode==13) search()">
                    <button onclick="search()"></button>
                </div>
                </div>
                <!-- <button class="navbar-toggle" onclick="toggleMobileMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button> -->
            
            <!-- <div class="mobile-menu" id="mobileMenu">
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="http://127.0.0.1:5000/">Career Prediction</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="blog.php">Knowledge Network</a></li>
                    <li><a href="contact.php">Contact US</a></li>
					<li><a href="login.php">login</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div> -->
            <div class="display-bar">
            <ul>
                    <li><a href="main.php">Home</a></li>
                    <li class="career"><a class="drop">Career Prediction</a>
                    <div class="dropdown">
                        <a href="http://127.0.0.2:5000">Engineering</a>
                        <a href="http://127.0.0.1:5000">Medical</a>
                        <a href="http://127.0.0.3:5000">10th</a>
                    </div>
                    </li>
                    <li class="career"><a class="drop">Courses</a>
                    <div class="dropdown">
                        <a href="engineering_course.php">Engineering</a>
                        <a href="medical_course.php">Medical</a>
                        <a href="arts.php">Arts</a>
                    </div>
                    </li>
                    <li><a href="contact.php">Contact US</a></li>
                    <li class="career">
                    <?php
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo '<div id="photo"></div><a class="drop" href="profile.php">' . $_SESSION["username"] . '</a>';
                    echo '<div class="dropdown">';
                    echo '<a href="logout.php">Logout</a>';
                    echo '</div>';
                    } else {

                    echo '<a href="login.php">Login</a>';
                    }
                    ?>
                    </li>

                    
                </ul>
            </div>
        </div>
    </header>
</body>

</html>
