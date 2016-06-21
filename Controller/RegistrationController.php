<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 25-Apr-16
 * Time: 12:22 PM

 */
session_start();

include  ('../Model/CrudClass.php');


if(isset($_POST['register']))
{
    $crud = new Crud();
    $email  = $_POST['email'];
    $sql1   = "SELECT * FROM users WHERE `email` = '".$email."' ";

    $row = $crud->SelectRow($sql1);



    if( count($row)==0 && ($_POST['password'] == $_POST['password_confirmation']) )
    {
        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_BCRYPT, array(
            'salt' => 'saltsaltsaltsaltsaltsaltsaltsalt',
        ));

        $sql2 = " INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, '".$_POST['name']."', 'user', '".$_POST['email']."', '".$hash_password."', NULL, NULL, '0000-00-00 00:00:00.000000'); ";
        $result = $crud->InsertRow($sql2);

        if($result)
        {   $success = "Registration Successful";
            echo "<script>alert('".$success."');</script>";
            header("Location: ../login.php");
        }


    }
    else
    {

        if($_POST['password'] != $_POST['password_confirmation'])
            echo "Sorry, Password didn't matched !<br>";
        if(count($row)>0)
            echo "This Email is Already registered, Try Another Email<br>";
        //header("Location: ../register.php");
    }


}