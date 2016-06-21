<?php


class Select
{
    //public $connect = mysqli_connect('localhost','root','','akashakr_news_portal');
    public function __construct()
    {
        $this->connect = mysqli_connect('localhost','root','','akashakr_news_portal');
    }
 
    public function SelectRow($query)
    {

        $result = mysqli_query($this->connect,$query);
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }



}