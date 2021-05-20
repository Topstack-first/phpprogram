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
	<h1>Welcome To Developing Software Introduction</h1><hr>
		<h2>Login</h2>
			<form name="entry" method="POST" action="index.php?action=login">
			  
				<div class="form-group">
			       <label for="name">Name : </label>
				   <input type="text" name="user" class="form-control" placeholder="Your Full Name *" required>
				</div>
				<div class="form-group">
			      <label>Password : </label>
				  <input type="password" name="pass" class="form-control" placeholder="Your Password *"required>
			    </div>
				<div class="form-group">
				<div>
					<?php echo $loginError ?>
				</div>
				<input type="submit" class="btn btn-primary" value="Log In">
				</div>
			</form> 
</div>
</body>
</html>