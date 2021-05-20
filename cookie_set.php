<?php
function reject( $entry )
{
    echo "Invalid $entry <br>" ;
    echo 'Please <a href="index.html">Log In</a>' ;
    exit() ;
}
if( isset( $_POST[ 'user' ] ) )
{
  $user = trim( $_POST[ 'user' ] ) ;
  //Check for all alphabetic characters 
  if( !ctype_alpha( $user ) ) { reject( 'User Name' ) ; }
  if( isset( $_POST[ 'pass' ] ) )
  {
  //Check for all alphanumeric characters 
    $pass = trim( $_POST[ 'pass' ] ) ;
    if( !ctype_alnum( $pass ) ) { reject( 'Password' ) ; }
    else
    {
	  //set expiry
      setcookie('user', $user, time()+600 ) ;
	  //password encryption md5 128-bits (32 caracters).  
	  //If you are building a new website, Sha1, sha2, or other kinds of encryption (with salt) would be better
      setcookie('pass', md5 ($pass ), time()+600 ) ;
	  //if meets criteria load page
      header('Location: cookie_get.php') ;
    }
  }
}
	 //if fails criteria load page
else { header('Location: index.html') ; }
?>
