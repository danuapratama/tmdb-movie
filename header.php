<?php 
include_once('api/api.php');
include_once('inc/inc_fungsi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="Movie">
  <meta name="author" content="">
  <meta name="keywords" content="Movie">

  <!-- BOXICONS -->
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' />

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/solid.min.css" integrity="sha512-uj2QCZdpo8PSbRGL/g5mXek6HM/APd7k/B5Hx/rkVFPNOxAQMXD+t+bG4Zv8OAdUpydZTU3UHmyjjiHv2Ww0PA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" integrity="sha512-aNH2ILn88yXgp/1dcFPt2/EkSNc03f9HBFX0rqX3Kw37+vjipi1pK3L9W08TZLhMg4Slk810sPLdJlNIjwygFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <!-- CSS BOOTSTRAP 5.2.0 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <title>DBMovies</title>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/app.css">

  <!--=============== CUSTOM FONTS ===============-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="/assets/casual-life-3d-avatar-with-man-in-green-shirt-and-orange-hat.png" />
</head>

<body>

  <header>
    <nav class="navbar nav-container text-light fixed-top navbar-expand-lg">
      <div class="container">

        <a class="navbar-brand text-light rounded fw-bold navbrand" href="<?php echo url_dasar() ?>">DBMovies</a>

        <button class="navbar-toggler shadow-none fs-6 p-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icons fa fa-bars fs-3" style="color:white;"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <hr class="mt-2">
          <ul class="navbar-nav text-center">
            <li class="nav-item me-1">
              <a class="nav-link navitem" aria-current="page" href="<?php echo url_dasar() ?>#">Popular</a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link navitem" aria-current="page" href="<?php echo url_dasar() ?>/upcoming">Up Coming</a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link navitem" aria-current="page" href="#">About</a>
            </li>
            <hr>
            <div class="dropdown">
              <button class="btn btn-warning shadow-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Socials<i class="ms-2 fa-solid fa-angle-down"></i>
              </button>
              <ul class="dropdown-menu pt-2 pb-2" aria-labelledby="dropdownMenuButton1" style="margin-top: 1rem;">
                <li><a class="dropdown-item text-center border-bottom pt-2 pb-2" href="https://danupratama.site/" target="_blank"><i class="me-2 fa-solid fa-globe"></i>Portfolio</a></li>
                <li><a class="dropdown-item text-center border-bottom pt-2 pb-2" href="https://github.com/danuapratama" target="_blank"><i class="me-2 fa-brands fa-github"></i>GitHub</a></li>
                <li><a class="dropdown-item text-center pt-2 pb-2" href="mailto:danupratama.dev@gmail.com" target="_blank"><i class="me-2 fa-solid fa-envelope"></i>Email</a></li>
              </ul>
            </div>
          </ul>
          <hr>
        </div>
      </div>
    </nav>
  </header>
  <main class="container" style="min-height: 100vh;">