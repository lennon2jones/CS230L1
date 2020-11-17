<?php
	require 'includes/header.php'
?>
<main>
<link rel="stylesheet" href="css/login.css">
        <div class="bg-cover">
          <div class="row my-auto">
                <div id="carouselExampleIndicators" class="carousel slide col-md-6 offset-md-2" data-ride="carousel" style="margin-top: 40px; width: 400px; height: 300px;">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/carousel-1.jpg" class="d-block mx-auto" alt="..." style="width: 400px; height: 300px;">
                      </div>
                      <div class="carousel-item">
                        <img src="images/carousel-2.JPG" class="d-block mx-auto" alt="..." style="width: 400px; height: 300px;">
                      </div>
                      <div class="carousel-item">
                        <img src="images/carousel-3.jpg" class="d-block mx-auto" alt="..." style="width: 400px; height: 300px;">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
             <div class="h-50 center-me">
                <div class="my-auto">
                    <form class="form-signin" action="includes\login-helper.php" method="post" style="background: white;">
                        <img src="images/broncos.jpg" alt="Broncos" style="height: 99px; width: 132px;">
                        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                        <label for="inputEmail" class="sr-only">Username or Email address</label>
                        <input type="text" id="inputEmail" name="login-uname" class="form-control" placeholder="Username / Email" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="login-pwd" class="form-control" placeholder="Password" required>
                        <div class="center-text" style="padding: 20px">Don't Have an Account? <a href="signup.php">Sign Up</a></div>
                        <button class="btn btn-lg btn-primary btn-block" name= "login-submit" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                    </form>
                </div>
            </div>
            </div>
        </div>
</main>