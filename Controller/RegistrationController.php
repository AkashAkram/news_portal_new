<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 25-Apr-16
 * Time: 12:22 PM

 */
session_start();

include  ('../Model/InsertClass.php');
include  ('../Model/SelectClass.php');


if(isset($_POST['register']))
{
    $select = new Select();
    $insert = new Insert();
    $email = $_POST['email'];
    $sql1 = "SELECT * FROM users WHERE `email` = '".$email."' ";

    $row = $select->SelectRow($sql1);



    if( count($row)==0 && ($_POST['password'] == $_POST['password_confirmation']) )
    {
        $sql2 = " INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, '".$_POST['name']."', 'user', '".$_POST['email']."', '".$_POST['password']."', NULL, NULL, '0000-00-00 00:00:00.000000'); ";
        $result = $insert->InsertRow($sql2);

        if($result)
        {   $success = "Registration Successful";
            echo "<script>alert('".$success."');</script>";
            header("Location: ../login.php");
        }

/*
        $sql3 = "SELECT * FROM users WHERE `name` = '".$_POST['name']."' AND `email` = '".$email."'" ;
        $user = $select ->SelectRow($sql3);

        $mysession = new Session();
        $mysession->SessionInit($user[0]);
        header("Location: ../index.php");
*/
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