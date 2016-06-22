<?php

session_start();

include "../Model/CrudClass.php";




if(isset($_POST['login']))
{
    $crud = new Crud();

    $email = $_POST['email'] ;
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_BCRYPT, array(
        'salt' => 'saltsaltsaltsaltsaltsaltsaltsalt',
    ));

    $sql = "SELECT * FROM users WHERE `email` = '".$email."' AND `password` = '".$hash_password."' ";
    $user = $crud->SelectRow($sql);
    $pass = $user[0]['password'];
    //echo "Registered hash password : ".$pass." <br>";
    //echo "Login hash password : ".$hash_password." <br>";

    if(count($user)>0)
    {
        $x=$crud->SessionInit($user[0]);
        header("Location: ../");
        //print_r($_SESSION);
    }
    else
    {
        header("Location: ../login.php");
    }


//echo "<a href='../index.php'>Home</a>";
}