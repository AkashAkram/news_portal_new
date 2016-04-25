<?php

include  ('../Model/InsertClass.php');
include  ('../Model/SelectClass.php');


if(isset($_POST['postButton']))
{

    $sql1 = "SELECT * FROM users WHERE `name` = 'Akramul' AND `email` = 'akash@gmail.com' ";
    $select = new Select();
    $row = $select->Select($sql1);
    //var_dump($row);

    $sql2 = "INSERT INTO `articles` (`id`, `title`, `cover`, `author_id`, `category_id`, `body`, `created_at`, `updated_at`) VALUES (NULL, '".$_POST['title']."', 'imageDir', '".$row[0]['id']."', '".$_POST['category_id']."', '".$_POST['body']."', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";
    $insert = new Insert();
    $insert->newEntry($sql2);

    header("Location: ../index.php");
}


