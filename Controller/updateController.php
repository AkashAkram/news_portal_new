<?php

include('Model/SelectClass.php');
include('Model/InsertClass.php');


$select = new Select();

$sql1 =  "SELECT * FROM categories";
$rows = $select->SelectRow($sql1);

$sql2 = "SELECT * FROM `articles` WHERE `id` = '".$_GET['post_id']."'";
$blog = $select->SelectRow($sql2);


if(isset($_POST['update']))
{
    $update = new Update();
    $sql3 = "UPDATE `articles` SET `title` = '".$_POST['title']."', `category_id` = '".$_POST['category_id']."', `cover` = '".$_POST['image']."', `body` = '".$_POST['body']."',";
    $numRows = $update->updateRow($sql3);

    if ($numRows>0)
        header("Location: ../index.php");
    else
        header("Location: ../update.php?post_id='".$row['id']."' ");


}