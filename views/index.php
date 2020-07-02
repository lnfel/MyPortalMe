<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; MyPortal</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="./assets/stisla/css/style.css">
  <link rel="stylesheet" href="./assets/stisla/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <center><img src="./site_source/myportal_logo.jpg" alt="logo" width="200" class=" mb-5 mt-2"></center>
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">MyPortal</span></h4>
            <p class="text-muted">Before you get started, you must login your account.</p>
            <form method="POST" action="#" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="Username">Username</label>
                <input id="Username" type="text" class="form-control" name="Username" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your Username
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  Please fill in your password
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>

              <div class="form-group text-right">
                <a href="auth-forgot-password.html" class="float-left mt-3">
                  Forgot Password?
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Don't have an account? <a href="auth-register.html">Create new one</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; MyPortal.
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="./assets/stisla/img/unsplash/login-bg.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                <h5 class="font-weight-normal text-muted-transparent">Manila, Philippines</h5>
              </div>
              Copyright © <a class="text-light bb" target="_blank" href="#">MyPortal.</a> <!--<a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>-->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/popper.js/dist/popper.min.js" ></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="./assets/vendor/jquery.nicescroll/jquery.nicescroll.js"></script>
  <script src="./assets/vendor/moment/min/moment.min.js"></script>
  <script src="./assets/stisla/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="./assets/stisla/js/scripts.js"></script>
  <script src="./assets/stisla/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
