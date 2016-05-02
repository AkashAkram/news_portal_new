<?php

session_start();

include "../Model/SessionClass.php";
include "../Model/SelectClass.php";




if(isset($_POST['login']))
{
    $select = new Select();

    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

    $sql = "SELECT * FROM users WHERE `email` = '".$email."' AND `password` = '".$password."' ";
    $user = $select->SelectRow($sql);


    if(count($user)>0)
    {
        $mysession = new Session();
        $mysession->SessionInit($user[0]);
        header("Location: ../");
    }
    else
    {
        header("Location: ../login.php");
        echo "<script>alert('Incorrect Email/Password');</script>";

    }



}