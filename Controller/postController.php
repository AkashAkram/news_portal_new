<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 26-Apr-16
 * Time: 10:50 PM
 */


//include('Model/SelectClass.php');

$select = new Select();
$sql1 =  "SELECT * FROM articles WHERE `id` = '".$_GET['id']."' ";
$row = $select->SelectRow($sql1);

