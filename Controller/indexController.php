<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 26-Apr-16
 * Time: 2:05 PM
 */

//include('Model/SelectClass.php');
$crud = new Crud();


$sql1 =  "SELECT * FROM categories";
$categories = $crud->SelectRow($sql1);


$sql2 =  "SELECT * FROM articles ORDER BY id DESC ";
$posts = $crud->SelectRow($sql2);

