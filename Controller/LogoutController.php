<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 25-Apr-16
 * Time: 12:23 PM
 */

session_start();
//print_r($_SESSION);
session_unset();
session_destroy();
$_SESSION = array();
//print_r($_SESSION);


//echo "<a href='../index.php'>Home</a>";
header("Location: ../login.php");
