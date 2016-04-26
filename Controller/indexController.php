<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 26-Apr-16
 * Time: 2:05 PM
 */

include('Model/SelectClass.php');

$select = new Select();
$sql1 =  "SELECT * FROM articles ORDER BY id DESC ";
$rows = $select->SelectRow($sql1);

