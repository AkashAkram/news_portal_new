<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 25-Apr-16
 * Time: 12:23 PM
 */
include "../Model/SelectClass.php";
if(isset($_POST['login']))
{
    $select = new Select();

    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

    $sql = "SELECT * FROM users WHERE `email` = '".$email."' AND `password` = '".$password."' ";
    $user = $select->SelectRow($sql);
    //echo count($user);
    //var_dump($user);

    if(count($user)>0)
    {
        $_SESSION = array();
        $_SESSION['id'] = $user[0]['id'];
        $_SESSION['name'] = $user[0]['name'];
        $_SESSION['email'] = $user[0]['email'];

        //var_dump($_SESSION);
        header("Location: ../index.php");
    }
    else
        echo "Incorrect Email/Password";


}