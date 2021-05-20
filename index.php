<?php
    include 'global.php';
    include 'functions.php';

    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
        if($action == "logout")
        {
            logout();
        }
        else if($action == "login")
        {
            $result = login();
            if($result != true)
            {
                $loginError = $result;
            }
        }
    }
    //check if the administrator is logged on
    if(isLogin() == true)
    {
        include 'main.php';
    }
    else{
        include 'login.php';
    }
?>