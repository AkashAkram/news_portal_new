<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amar Blog ! Home</title>
    <style>
        body{
            background-image: url("resource/images/light-bg10.jpg");
        }
    </style>
    <link rel="stylesheet" href="resource/css/main.css">
    <link rel="stylesheet" href="resource/css/bootstrap.css">
    <link rel="stylesheet" href="resource/css/blog-home.css">
    <link rel="stylesheet" href="resource/css/light-theme.css">
</head>



<body id="app-layout">
<nav class="navbar navbar-akash navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="/">
                <img class="nav-img" src="resource/images/amarblog5.png" alt="" height="35px" width="40px;"> আমার ব্লগ
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links

                @if () -->
                <?php if (empty($_SESSION)){ ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>

                <?php } else{ ?>
                <li class=" "><a href="newpost.php">Create New</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="resource/images/blog-cover.JPG" alt="" width="20" height="17">
                        <?php echo $_SESSION['name']; ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                       <!--  @if( Auth::User()->role == "admin" )  -->
                        <?php if ($_SESSION['role']=='admin') { ?>
                            <li><a href="dashboard"><i class=""></i>Dashboard</a></li>
                        <?php } ?>
                        <li><a href="myblog.php"><i class=""></i>My Blogs</a></li>
                        <li><a href="myprofile/<?php ?>"><i class=""></i>Profile</a></li>
                        <li><a href="Controller/logoutController.php"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
                <?php  } ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container" align="center">
    <div class="row" align="center" style="text-align: justify">

        
      <!--     -->