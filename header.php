<?php session_start();
include ('Model/CrudClass.php');
include "Controller/indexController.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>News Portal</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Duplex Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    


    <link href="resource/css/bootstrap2.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="resource/css/main.css">
    <link rel="stylesheet" href="resource/css/bootstrap.css">
    <link rel="stylesheet" href="resource/css/blog-home.css">
    <link rel="stylesheet" href="resource/css/light-theme.css">
    <link rel="stylesheet" href="resource/css/style.css">
    <link rel="stylesheet" href="resource/css/style2.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<link href="resource/css/nav.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
    <div id="home" class="header">

        <div class="header-top">
            <!-- container -->
            <div class="container">
                <div class="top-nav">
                    <ul class="nav1">
                        <li><a href="index.php">Home</a></li>
                        <?php if(!empty($_SESSION)){ ?>                                     
                            <li><a href="Controller/logoutController.php">Logout</a></li>
                            <li><a href="profile.php"><?php echo $_SESSION['name'] ?></a></li>
                            <!--?id=<?php// echo $_SESSION['id'] ?>-->
                        <?php } else{ ?>
                            <li><a href="login.php">Login</a></li>     
                            <li><a href="register.php">Register</a></li>
                        <?php } ?>
                        
                    </ul>
                </div>
                <div class="nav-right">
                    <ul class="nav1">
                    <?php if(!empty($_SESSION)){ ?>
                        <?php if($_SESSION['role']=='admin'){ ?>
                            <li><a href="admin.php">Admin Area</a></li>
                        <?php } 
                    } ?>
                    </ul>
                    
                </div>
                <div class="clearfix"> </div>
                <!-- script-for-menu -->
            </div>
            <!-- //container -->
        </div> <!-- header-top -->
        <div class="container">
        <div class="header-bottom">
            <!-- container -->
            
                <div class="head-logo">
                    <a href="index.php"><img src="resource/images/logo.png" class="img-responsive" alt="" /></a>
                </div>
                <div class="logo-right">
                    <img src="resource/images/468x60.gif" class="img-responsive" alt="LOGO" />
                </div>
                <div class="clearfix"> </div>
            
            <!-- //container -->
        </div>
        </div>
    <!-- //header -->   
    <!-- bg-banner -->
    <div class="container">


        <div class="bg-banner">
            <div class="banner-bottom-bg">

                <div class="banner-bg"> 
                    
                        <!-- banner -->
                        <div class="banner">

                            <div class="banner-grids">
                                <div class="banner-top">
                                    <span class="menu">MENU</span>
                                    <ul class="nav banner-nav">
                                        <?php 
                                        $crud = new Crud();
                                        $sql = "select * from `categories`"; 

                                        $cat_rows = $crud->SelectRow($sql);
                                        foreach($cat_rows as $row){ ?>
                                            <li class="dropdown1"><a href="sortbycategory.php?cat_id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></li>
                                        <?php  } ?>
                                    </ul>
                                </div>
