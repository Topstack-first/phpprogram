<?php
    include 'global.php';
    include 'functions.php';

    $loginResult = false;
    $action = "";
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
        if($action == "logout")
        {
            logout();
        }
        else if($action == "login")
        {
            $loginResult = login();

            if($loginResult != true)
            {
                $loginError = $loginResult;
            }
            else{
                header('Location: index.php') ;
            }
        }
        else if($action == "staff")
        {
            $staffName = generateUsername();
        }
        else if($action == "factorial")
        {
            $factorialResult = getCalculatedFactorialString();
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