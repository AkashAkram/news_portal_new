<?php

/**
 * Created by PhpStorm.
 * User: akash
 * Date: 23-Apr-16
 * Time: 9:20 PM
 */
class Delete
{
    public function DeleteRow($query)
    {
        $connect = mysqli_connect('localhost','root','','akashakr_amarblogdb');
        $result = mysqli_query($connect,$query);

        return $result;
    }
}