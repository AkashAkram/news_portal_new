<?php

session_start();

include "../Model/SessionClass.php";
//include "../Model/SelectClass.php";




if(isset($_POST['login']))
{
    $select = new Select();

    $email = $_POST['email'] ;
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_BCRYPT, array(
        'salt' => 'saltsaltsaltsaltsaltsaltsaltsalt',
    ));

    $sql = "SELECT * FROM users WHERE `email` = '".$email."' AND `password` = '".$hash_password."' ";
    $user = $select->SelectRow($sql);
    $pass = $user[0]['password'];
    echo "Registered hash password : ".$pass." <br>";
    echo "Login hash password : ".$hash_password." <br>";

    if(count($user)>0)
    {
        $mysession = new Session();
        $mysession->SessionInit($user[0]);
        header("Location: ../");
    }
    else
    {
        header("Location: ../login.php");
    }



}