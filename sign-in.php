<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  // something was posted
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!empty($email) && !empty($password) && !is_numeric($email))
  {
    $query = "select * from users where email = '$email' limit 1";

    $result = mysqli_query($con, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] == $password)
          {
            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: index-signed-in.html");
            die;
          }
      }
    }
    echo "Please enter valid information.";
  } 
  else
  {
    echo "Please enter valid information.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dev.lib - Sign In</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="src/img/boost-img.png"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="src/custom.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="src/script.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">dev.lib</a>
        <button
          class="navbar-toggler shadow-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link navbar-link-devlib" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-link-devlib" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-link-devlib" href="explore.php">Explore Assets</a>
            </li>
          </ul>
          <form class="nav navbar-nav navbar-right">
            <!-- <button
              class="btn btn-secondary m-1 btn-publish"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target=".navbar-collapse.show"
              onclick="window.location='sign-up.php';"
            >
              Publish Asset ONLY IF LOGGED IN
            </button> -->
            <button
              class="btn m-1 btn-login shadow-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target=".navbar-collapse.show"
              onclick="window.location='sign-in.php';"
            >
              Login
            </button>
            <button
              class="btn btn-primary m-1 btn-sign-up shadow-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target=".navbar-collapse.show"
              onclick="window.location='sign-up.php';"
            >
              Sign Up
            </button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid justify-content-center">
    <h4 class="sign-in-text">Sign Into Your Account</h4>

    <form class="login-form" id="loginForm" method="post">
      <div class="form-group" id="loginInputContaier">
        <input
          type="email"
          name="email"
          placeholder="Email"
          class="form-control auth-inputs shadow-none"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
        />
        <input
          type="password"
          name="password"
          placeholder="Password"
          class="form-control auth-inputs shadow-none"
          id="exampleInputPassword1"
        />
        <button type="submit" class="btn btn-primary form-control auth-inputs btn-sign-up-page shadow-none" value="Login">
        Sign In
        </button>
        <p class="no-alr-acc">Don't have an account? <a class="sign-in-up-a" href="sign-up.php">Sign Up</a></p>
      </div>
    </form>
  </body>
</html>
