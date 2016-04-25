<?php


class Select
{

    function __construct()
    {

    }


    public function Select($query)
    {

        $connect = mysqli_connect('localhost','root','','akashakr_amarblogdb');

        $result = mysqli_query($connect,$query);
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }



/*
    public function SelectSingleRow($query)
    {

        $connect = mysqli_connect('localhost','root','','akashakr_amarblogdb');
        $result = mysqli_query($connect,$query);
        $row = mysqli_fetch_assoc($result);

        return $row;
    }

*/

    public function SelectRowCount($query)
    {
        $connect = mysqli_connect('localhost','root','','akashakr_amarblogdb');

        $result = mysqli_query($connect,$query);
        $numrows = mysqli_num_rows($result);
        return $numrows;
    }



}