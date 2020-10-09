<!-- <?php
    session_start();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>Networking Site | Skyware</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
  <a class="navbar-brand" href="#">Skyware</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto float-right">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item float-right">
        <a class="nav-link" href="login.inc.php">Login</a>
      </li>
      <li class="nav-item float-right">
        <a class="nav-link" href="register.inc.php">Register</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron pb-5 ">
  <div class="row">
    <div class="col-lg-7 pl-5">
      <img src="/public/assets/images/mouth.svg" alt="" srcset="" width="400"> 
    </div>
    <div class="col-lg-3">
      <h1 class="display-4">Network Marketing!</h1>
          <p class="lead pt-3 pb-4">Simplest Way to get Started!</p>
          <a class="btn btn-primary " href="register.inc.php" role="button">Get Started!</a> 
        </div>
    
  </div>
</div>


<div class="container-fluid">
<div class="card " style="background: white; border:none;">
  <div class="card-header text-center" style="background: white; border:none;">
    <h3 style="color: #00B0FF;">Get Products </h3>
  </div>
  <div class="card-body">
         <div class="row">
    
            <div class="col-4">
                <div class="card justify-content-center mx-auto shadow rounded" style="width: 18rem;">
                    <img src="/public/assets/images/business.svg" alt="..."width=" 150" height="200" class="mx-auto py-5 "> 
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-4">
                <div class="card justify-content-center mx-auto shadow rounded" style="width: 18rem;">
                    <img src="/public/assets/images/card.svg"  alt="..." width=" 150" height="200" class="mx-auto py-5 ">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-4">
                <div class="card justify-content-center mx-auto shadow rounded" style="width: 18rem;">
                    <img src="/public/assets/images/self.svg" alt="..." width=" 150" height="200" class="mx-auto py-5 ">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
</div>
</div>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>