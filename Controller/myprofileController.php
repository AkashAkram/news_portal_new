<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 02-May-16
 * Time: 4:11 PM
 */
session_start();

include "../Model/CrudClass.php";


$crud = new Crud();
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

    $result = $crud->updateRow($sql);
    if($result)
    {
        
        
        $sql2 = "SELECT * FROM users WHERE `id` = '".$_SESSION['id']."' ";
        $user = $crud->SelectRow($sql2);
        $crud->SessionInit($user[0]);

//var_dump($user);
       header("Location: ../index.php");
    }

}