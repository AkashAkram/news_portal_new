<?php
session_start();
include('../Model/SelectClass.php');
include('../Model/UpdateClass.php');
include "../Model/SessionClass.php";



if(isset($_POST['update']))
{
    echo "Post id in session = ".$_SESSION['post_id']."<br>";
    $update = new Update();

    $sql3 = "UPDATE `articles` SET `title` = '".$_POST['title']."', `category_id` = '".$_POST['category_id']."', `body` = '".$_POST['body']."' WHERE `articles`.`id` = '".$_SESSION['post_id']."'";
    $result = $update->updateRow($sql3);

    //`cover` = '".$_POST['image']."',
    //if ($result>0)
        header("Location: ../index.php");
    //else
      //  header("Location: ../update.php?post_id=$_SESSION[post_id]");


    $user = $_SESSION;
    $mysession = new Session();
    $mysession->SessionInit($user);
}
