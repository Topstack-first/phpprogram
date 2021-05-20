<!--takes name and greets welcome (name)-->
<!-- php script with second name and first letter -->
<!--create a form that generates a user-->
<!--takes the cookie and feeds it to the name-->
<!--form that prompts for factorial number-->
<!--displays factorial number-->

<!--Cookie to take name and pass to factorial page with Welcome (name)-->
<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>PHP exercise</title>


<!--search engine stuff-->

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styles1.css">

<!--Bootstrap CDN-->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!--old bootstrap-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<header>




</header>

<body>

  <div class="contianer center-option">
    <nav class="nav nav-pills nav-fill">

    <div class="container-box-nav">
      <div class="box-inner-nav">
        <span></span>
        <div class="content-nav">
    <a class="" href="user.php">Create User</a>
        </div>
      </div>
    </div>

    <!--option2-->

    <div class="container-box-nav">
      <div class="box-inner-nav">
        <span></span>
        <div class="content-nav">
    <a class="nav-item nav-link" href="cookie_get.php">Main Menu</a>
        </div>
      </div>
    </div>


    <!--option 3-->
    <div class="container-box-nav">
      <div class="box-inner-nav">
        <span></span>
        <div class="content-nav">
    <a class="nav-item nav-link" href="cookie_form.html">Log Out</a>
        </div>
      </div>
    </div>
    </nav>
  </div>


<!--factorial form -->



<div class="container background-colours">

<div class="container-box">
  <div class="box-inner">

    <form class="factorial-form" method="POST" action="factorial.php">


      <div>
          <label for="factorial">factorial number : </label>
          <span></span>
            <div class="content">

              <label>Please enter factorial number</label>
          <input type="number" name="number" id="number"> <br>

          <input type="submit" class="btn btn-primary text-center" value="submit">
            <p>

              <?php

              $num = $_POST['number'];
              $factorial = $num;
              $answer = $factorial * $x;

              for ($x=$num; $x>=1; $x--)
              {
                $factorial = $factorial * $x;
                echo "$factorial * $x";
              }

              if ($num >= 1 ) {
                echo "= $factorial";
              }

              elseif ($num <= 0) {
                echo "Please enter a number higher than 0 for factorial calculation";
              }

              ?>

            </p>
        </div>
      </form>
      <div>
    </div>
  </div>
