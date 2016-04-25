<?php

/**
 * Created by PhpStorm.
 * User: akash
 * Date: 23-Apr-16
 * Time: 9:19 PM
 */
class Insert
{
    /**
     * @param $query
     */
    public function newEntry($query)
    {
        //$con = new Connection();
        //$connect = $con->connect();
        $connect = mysqli_connect('localhost','root','','akashakr_amarblogdb');
        if ($connect)
            echo "connected";

        if(mysqli_query($connect, $query))
            echo "Insert Successfully";
        else
            echo "Error Occured";
    }
}