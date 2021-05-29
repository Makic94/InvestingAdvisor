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
    <form action="login.php" method="POST">
      <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5"> <span class="circle"><a class="link-light" href="overview.php"><i class="bi bi-alt"></i></a></span>
                    <h1 class="mt-3">Welcome <br> <small class="text-muted">Back</small></h1>
                    <p></p>
                    <div class="form-input"> <i class="bi bi-person"></i> <input type="text" class="form-control" placeholder="Username"> </div>
                    <div class="form-input"> <i class="bi bi-lock"></i> <input type="text" class="form-control" placeholder="Password"> </div>
                    <button class="btn btn-primary mt-4 signup">Start coding now</button>
                    <div class="text-center mt-3"> <span>Or continue with these social profiles</span> </div>
                    <div class="d-flex justify-content-center mt-4"> <span class="social"><i class="bi bi-google"></i></span> <span class="social"><i class="bi bi-facebook"></i></span> <span class="social"><i class="bi bi-twitter"></i></span> <span class="social"><i class="bi bi-linkedin"></i></span> </div>
                    <div class="text-center mt-4"> <span>Not a member yet?</span> <a href="register.php" class="text-decoration-none">Join Us!</a> </div>
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
</html>