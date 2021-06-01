<?php

//check if the administrator logged in
function isLogin()
{
    if( isset( $_COOKIE[ 'user' ] ) )
    {
        return true;
    }
    return false;
}

//login function
function login()
{
    if( isset( $_POST[ 'user' ] ) )
    {
      $user = trim( $_POST[ 'user' ] ) ;
      //Check for all alphabetic characters 
      if( !ctype_alpha( $user ) ) { 
          return "Invalid ".$user;
       }
      if( isset( $_POST[ 'pass' ] ) )
      {
      //Check for all alphanumeric characters 
        $pass = trim( $_POST[ 'pass' ] ) ;
        if( !ctype_alnum( $pass ) ) { 
            return "Invalid ".$pass;
         }
        else
        {
          //set expiry
          setcookie('user', $user, time()+600 ) ;
          //password encryption md5 128-bits (32 caracters).  
          //If you are building a new website, Sha1, sha2, or other kinds of encryption (with salt) would be better
          setcookie('pass', md5 ($pass ), time()+600 ) ;
          //if meets criteria load page
          return true;
        }
      }
    }

    return "Invalid user name and password!";
}

//logout
function logout()
{
    unset($_COOKIE['user']);
}


//get administrator name
function getUsername()
{
    if( isset( $_COOKIE[ 'user' ] ) )
	{
		$user = $_COOKIE[ 'user' ] ;
		return $user;
	}
    return "invalid username!";
}

//get cookie data
function getCookieData()
{
    $result = "";
    if( count($_COOKIE) > 0 ) 
    {
        $result .= '<dl> ' ;
        foreach( $_COOKIE as $key => $value )
        {
            $result .= "<dt>Key: $key" ; 
            $result .= "<dd>Value: $value" ;
        }
        $result .= '</dl><hr>' ;  
    }
    return $result;
}

//get Calculated Factorial String
function getCalculatedFactorialString()
{
    $result = "";
    if(isset($_POST['number']))
    {
        //get posted number
        $num = $_POST['number'];
        $factorial = $num;
        
        //calculate factorial
        $result = $num."";
        for ($x=$num-1; $x>=1; $x--)
        {
        $factorial = $factorial * $x;
        $result .=  " * ".$x;
        }
    
        //check if the number is valid
        if ($num >= 1 ) {
         $result .= "= ".$factorial;
        }
        elseif ($num <= 0) 
        {
         $result =  "Please enter a number higher than 0 for factorial calculation";
        }
    }
    return $result;
}

//generate username
function generateUsername()
{
    $result = "";
    if(isset($_POST['first_name']) && isset($_POST['last_name']))
    {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
	$fullName = $firstName."".$lastName;

        //get first character of first name
        $firstName = substr($firstName,0,1);
        $result = $firstName.$lastName;
    }
    return $result;
}
?>