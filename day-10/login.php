<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Tutorial-05</title>
  </head>
  <body>
      <div class="text-center mt-5">
        <img class="mt-4 mb-4" src="images/bootstrap-icon.jpg" height="72" alt="bootstrap 5 logo">
        
        <h1 class="h3 mb-3 font-weight-normal">Please Log In</h1>
        <div class="row"> 
          <div class="col-4">

          </div>
          <div class="col-4">
            <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>

          </div>
          <div class="col-4">

          </div>
        </div>
        

        <form action="controller/UsersController.php" method="post">
          
            <label for="emailAddres" class="sr-only">Email Address</label>
            <input type="email" id="emailAddress" class="form-control" placeholder="Email Address" name="email" required="" autofocus>
            
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Password" name="password" required="" autofocus>
            <!-- <div class="checkbox mt-3">
                <input type="checkbox" value="remember-me">Remember Me
            </div> -->
            <input type="hidden" name="action" value="login_process" required="">
            <div class="mt-3">
                <button class="btn btn-primary btn-lg btn-block">Log In</button>
            </div>
        </form>

      </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->
  </body>

  <?php unset($_SESSION['message']); ?>
</html>