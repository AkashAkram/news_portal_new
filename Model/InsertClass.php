<?php

/**
 * Created by PhpStorm.
 * User: akash
 * Date: 23-Apr-16
 * Time: 9:19 PM
 */
class Insert
{

    public function InsertRow($query)
    {
        $connect = mysqli_connect('localhost','root','','akashakr_amarblogdb');
        //$connect = mysqli_connect('localhost','akashakr_akash','aa01914064500','akashakr_project');
        $result = mysqli_query($connect, $query);
        return $result;
    }
}