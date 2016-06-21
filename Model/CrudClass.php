<?php


class Crud
{
    //public $connect = mysqli_connect('localhost','root','','akashakr_news_portal');
    public function __construct()
    {
        $this->connect = mysqli_connect('localhost','root','','akashakr_news_portal');
    }
 



    public function InsertRow($query)
    {
        $result = mysqli_query($this->connect,$query);
        return $result;
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






    public function updateRow($query)
    {
        
        $result = mysqli_query($this->connect,$query);
        return $result;
    }





    public function DeleteRow($query)
    {

        $result = mysqli_query($this->connect,$query);
        return $result;
    }





    public function SessionInit($user)
    {
        $_SESSION = array();
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
    }



}