<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 26-Apr-16
 * Time: 1:54 PM
 */

//include('Model/SelectClass.php');



$crud = new Crud();
$sql1 =  "SELECT * FROM articles WHERE `author_id` = '".$_SESSION['id']."' ORDER BY id DESC ";
$rows = $crud->SelectRow($sql1);
//var_dump($rows);

