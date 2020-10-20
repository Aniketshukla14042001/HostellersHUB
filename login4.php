<?php require_once 'authcontroller.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="style4.css" />
    <title>login</title>
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col-md-4 offset-md-4 form-div">
  <form action="login4.php" method="post">
  <h3 class="text-center">Login</h3>

  
  <div class="form-group">
  <label for="username">Username or Email</label>
  <input type="text" name="username" class="form-control form-control-lg">
  </div>
 
      <div class="form-group">
  <label for="password">Password</label>
  <input type="password" name="password" class="form-control form-control-lg">
  </div>
  

       <div class="form-group">
  <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Login</button>
  </div>
  <hr>
 
  <p class="text-center">Not yet a member? <a href="signup.php">Sign up</a></p>
 
  
  </form>
  </div>
  </div>
  
  </body>
  </html>
  