<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Cookie Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- JavaScript Required for Bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<?php
	if( isset( $_COOKIE[ 'user' ] ) )
	{
		$user = $_COOKIE[ 'user' ] ;
		echo "<h1>Welcome $user !</h1><hr>";
		}
		else
		{
		echo 'Please <a href="index.html">Log In</a>' ;
		}
	?>
</div>
</body>
</html>

