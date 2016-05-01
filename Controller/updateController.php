<?php
session_start();
include('../Model/SelectClass.php');
include('../Model/UpdateClass.php');
include "../Model/SessionClass.php";



if(isset($_POST['update']))
{
    $update = new Update();

    $image    = $_FILES['image']['name'];
    $tempName = $_FILES['image']['tmp_name'];

    if(isset($image) and !empty($image)) {

        $location = "../resource/images/";
        move_uploaded_file($tempName, $location.$image);
        $sql = "UPDATE `articles` SET `title` = '".$_POST['title']."', `cover` = '".$image."', `category_id` = '".$_POST['category_id']."', `body` = '".$_POST['body']."' WHERE `articles`.`id` = '".$_SESSION['post_id']."'";

    }
    else
        $sql = "UPDATE `articles` SET `title` = '".$_POST['title']."', `category_id` = '".$_POST['category_id']."', `body` = '".$_POST['body']."' WHERE `articles`.`id` = '".$_SESSION['post_id']."'";

    $result = $update->updateRow($sql);

        header("Location: ../index.php");


    $user = $_SESSION;
    $mysession = new Session();
    $mysession->SessionInit($user);
}
