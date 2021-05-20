<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP Assessment</title>
</head>

<body>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Welcome <?php echo getUsername() ?>!</h1>
    </div>
    <hr>
    <br>
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Option 1</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title"></h1>
                    <a class="nav-item nav-link btn btn-lg btn-block btn-outline-primary" href="index.php?action=staff">
                        Generate a Staff
                    </a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Option 2</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title"></h1>
                    <a class="nav-item nav-link btn btn-lg btn-block btn-primary" href="index.php?action=factorial">
                        Calculate Factorial
                    </a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Log Out</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title"></h1>
                    <a class="nav-item nav-link btn btn-lg btn-block btn-primary" href="index.php?action=logout">
                        Quit Program
                    </a>
                </div>
            </div>
        </div>
        <div>
            <?php
            if($action == "staff")
            {
                include 'staff.php';
            }
            else if($action == "factorial")
            {
                include 'factorial.php';
            }
            ?>
        </div>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">Parissa Lebaschi EC1961382</small>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

  <!-- JavaScript Required for Bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- comments -->