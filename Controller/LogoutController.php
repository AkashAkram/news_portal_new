<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 25-Apr-16
 * Time: 12:23 PM
 */

session_start();
//session_unset();
session_destroy();
header("Location: ../login.php");
