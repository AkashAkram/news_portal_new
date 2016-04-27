<?php

/**
 * Created by PhpStorm.
 * User: akash
 * Date: 27-Apr-16
 * Time: 6:17 PM
 */
class Session
{
    /*
    public function SessionInit($id, $name, $email, $role)
    {
        $_SESSION = array();
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;
    }
    */


    public function SessionInit($user)
    {
        $_SESSION = array();
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
    }
}