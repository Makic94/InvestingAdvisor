<?php
include_once 'includes/autoLoader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/regLogStyle.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Investing Advisor</title>
</head>
<body>
  <div class="text-center">
    <form action="register.php" method="POST">
      <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5"> <span class="circle"><a class="link-light" href="overview.php"><i class="bi bi-alt"></i></a></span>
                    <h3 class="mt-3">Join over 25 million <br> <small class="text-muted">learners from around the globe</small></h3> <br> <small class="mt-2 text-muted">Master the languages of the web: HTML, CSS and javascript. This path will prepare you to build basic websites and then build interactive web apps</small>
                    <p></p>
                    <div class="form-input"> <i class="bi bi-envelope"></i> <input type="email" class="form-control" placeholder="Email address" id="email" name="email"> </div>
                    <div class="form-input"> <i class="bi bi-person"></i> <input type="text" class="form-control" placeholder="Username" id="username" name="username"> </div>
                    <div class="form-input"> <i class="bi bi-lock"></i> <input type="password" class="form-control" placeholder="Password" id="password" name="password"> </div>
                    <div class="form-input"> <i class="bi bi-lock"></i> <input type="password" id="password2" name="password2" class="form-control" placeholder="Repeat the password"> </div>
                    <button class="btn btn-primary mt-4 signup">Start coding now</button>
                    <div class="text-center mt-3"> <span>Or continue with these social profiles</span> </div>
                    <div class="d-flex justify-content-center mt-4"> <span class="social"><i class="bi bi-google"></i></span> <span class="social"><i class="bi bi-facebook"></i></span> <span class="social"><i class="bi bi-twitter"></i></span> <span class="social"><i class="bi bi-linkedin"></i></span> </div>
                    <div class="text-center mt-4"> <span>Already a member?</span> <a href="login.php" class="text-decoration-none">Login</a> </div>
                </div>
            </div>
        </div>
    </div>
    </form>
  </div>
  <!-- Loading script -->
  <script src="js/loader.js"></script>
  <!-- Loading animation -->
  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>
</body>
<?php
    $obj=new UsersContr();
    $obj->createUser();
    ?>
</html>