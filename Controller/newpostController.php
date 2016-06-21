<?php
session_start();
include  ('../Model/CrudClass.php');


if(isset($_POST['postButton']))
{
    $image    = $_FILES['image']['name'];
    $tempName = $_FILES['image']['tmp_name'];

    if(isset($image)) {
        if (!empty($image)) {
            $location = "../resource/images/";
            move_uploaded_file($tempName, $location.$image);
        }
    }


        $sql1 = "SELECT * FROM users WHERE `name` = '".$_SESSION['name']."' AND `email` = '".$_SESSION['email']."' ";
    $crud = new Crud();
    $row = $crud->SelectRow($sql1);
    //var_dump($row);

    $sql2 = "INSERT INTO `articles` (`id`, `title`, `cover`, `author_id`, `category_id`, `body`, `created_at`, `updated_at`) VALUES (NULL, '".$_POST['title']."', '".$image."', '".$row[0]['id']."', '".$_POST['category_id']."', '".$_POST['body']."', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";
   
    $crud->InsertRow($sql2);

    header("Location: ../index.php");
}


