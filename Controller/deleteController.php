<?php
session_start();
include('../Model/DeleteClass.php');
include "../Model/SessionClass.php";

//echo "Session id = ".$_SESSION['id']."<br>";
//echo "Author id = ".$_GET['author_id'];

if(empty($_SESSION) or $_SESSION['id']!=$_GET['author_id'])
{
    header("Location: index.php");
}


//else{
    $delete = new Delete();
    $sql = "DELETE FROM `articles`
    WHERE `id` = '".$_GET['delete_post']."' ";
    $result = $delete->DeleteRow($sql);

header("Location: http://localhost/amarblog-raw/");

//}

