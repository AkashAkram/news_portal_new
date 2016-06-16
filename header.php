<?php session_start();
include ('Model/SelectClass.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Portal</title>



    <link rel="stylesheet" href="resource/css/main.css">
    <link rel="stylesheet" href="resource/css/bootstrap.css">
    <link rel="stylesheet" href="resource/css/blog-home.css">
    <link rel="stylesheet" href="resource/css/light-theme.css">
    <link rel="stylesheet" href="resource/css/style.css">



</head>



<body id="app-layout">
<nav class="navbar-akash">
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
            <a class="navbar-brand" href="http://localhost/xmp/news_portal">
                 News Portal
            </a>
        </div>
                    <div class="search_box">
                            <form>
                                <input class="" type="text" class="" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                                <input type="submit" value="">
                            </form>
                    </div>
            
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                
                    
                
                <?php if (empty($_SESSION)){ ?>
                
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>

                <?php } else{ ?>
                <li class=" "><a href="newpost.php">Create New</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="resource/images/profile.JPG" alt="" width="20" height="17">
                        <?php echo $_SESSION['name']; ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                       <!--  @if( Auth::User()->role == "admin" )  -->
                        <?php if ($_SESSION['role']=='admin') { ?>
                            <li><a href="dashboard"><i class=""></i>Dashboard</a></li>
                        <?php } ?>
                        <li><a href="myblog.php"><i class=""></i>My Blogs</a></li>
                        <li><a href="myprofile.php"><i class=""></i>Profile</a></li>
                        <li><a href="Controller/logoutController.php"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
                <?php  } ?>
            </ul>
        </div>
    </div>
</nav>


            <div class="header_bottom margin-bottom-10 container">
                <div class="menu">

                     <ul class="mymenu">
                    <?php
                    $select = new Select();
                    $sql =  "SELECT * FROM categories";
                    $rows = $select->SelectRow($sql);
                    foreach($rows as $row){ ?>

                        <li><a class="" href="sortbycategory.php?cat_id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?><b class="caret"></b></a>
                        </li>
                    <?php  } ?>
                       
                </ul>

            </div>
                    
                     
                
                <div class="clear"></div>
            </div>

<div class="container" align="center">
    <div class="row" align="center" style="text-align: justify">
        
      <!--     -->