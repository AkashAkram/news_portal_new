<?php

/**
 * Created by PhpStorm.
 * User: akash
 * Date: 23-Apr-16
 * Time: 9:20 PM
 */
class Update
{
    public function updateRow($query)
    {
        $connect = mysqli_connect('localhost','root','','akashakr_amarblogdb');
        $result = mysqli_query($connect,$query);
        $numrows = mysqli_num_rows($result);
        return $numrows;
    }
}