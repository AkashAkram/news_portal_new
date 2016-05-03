<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 02-May-16
 * Time: 4:11 PM
 */
session_start();

include "../Model/UpdateClass.php";
include "../Model/SelectClass.php";
include "../Model/SessionClass.php";


$update = new Update();
if(isset($_POST['updateprofile']))
{

    if(!empty($_POST['password']))
    {

        if($_POST['password'] == $_POST['con_password'])
        {
            $password = $_POST['password'];
            $hash_password = password_hash($password, PASSWORD_BCRYPT, array(
                'salt' => 'saltsaltsaltsaltsaltsaltsaltsalt',
            ));
            $sql = "UPDATE `users` SET `name` = '".$_POST['name']."', `email` = '".$_POST['email']."', `password` = '".$hash_password."'  WHERE `id` = '".$_SESSION['id']."'  ";

        }
        else
        {
            echo "<script>alert('Password did not matched ! ')</script>";
           // header("Location: ../myprofile.php");
        }
    }
    else
    {
        $sql = "UPDATE `users` SET `name` = '".$_POST['name']."', `email` = '".$_POST['email']."'  WHERE `id` = '".$_SESSION['id']."'  ";
    }

    $result = $update->updateRow($sql);
    if($result)
    {
        $mysession = new Session();
        $select = new Select();
        $sql2 = "SELECT * FROM users WHERE `id` = '".$_SESSION['id']."' ";
        $user = $select->SelectRow($sql2);
        $mysession->SessionInit($user[0]);

//var_dump($user);
       header("Location: ../index.php");
    }

}