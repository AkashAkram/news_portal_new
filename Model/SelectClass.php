<?php


class Select
{



    public function SelectRow($query)
    {
        $connect = mysqli_connect('localhost','root','','akashakr_news_portal');
        //$connect = mysqli_connect('localhost','akashakr_akash','aa01914064500','akashakr_project');

        $result = mysqli_query($connect,$query);
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }



}