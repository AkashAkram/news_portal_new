<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 25-Apr-16
 * Time: 12:22 PM

 */
include "../header.php";
include  ('../Model/InsertClass.php');
include  ('../Model/SelectClass.php');


if(isset($_POST['register']))
{
    $select = new Select();
    $insert = new Insert();
    $email = $_POST['email'];

    $sql1 = "SELECT * FROM users WHERE `email` = '".$email."' ";

    $numRow = $select->SelectRowCount($sql1);

        //var_dump($row);
        //echo $numRow;
        //echo $row['email'];

    if( $numRow==0 && ($_POST['password'] == $_POST['password_confirmation']) )
    {
        $sql2 = " INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, '".$_POST['name']."', 'user', '".$_POST['email']."', '".$_POST['password']."', NULL, NULL, '0000-00-00 00:00:00.000000'); ";
        $insert->newEntry($sql2);

        header("Location: index.php");
    }
    else
    {
        header("Location: register.php");
        if($_POST['password'] != $_POST['password_confirmation'])
            echo "Sorry, Password didn't matched !<br>";
        if($numRow>0)
            echo "This Email is Already registered, Try Another Email";
    }


}