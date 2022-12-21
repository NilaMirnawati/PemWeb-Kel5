<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/glyphicons.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>BimbelKami</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark mb-5" style="background-color: #002e94">
    <!-- container membuat navbar tidak terlalu menempel ke kiri -->
    <div class="container">
      <a class="navbar-brand" href="index.php">BimbelKami.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- ml-auto menambahkan margin agar home dll berada di kanan -->
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="index.php">HOME</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">RUANG KELAS</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="ruangkelas1.php">VII</a>
              <a class="dropdown-item" href="ruangkelas2.php">VIII</a>
              <a class="dropdown-item" href="ruangkelas3.php">IX</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">BUKU PELAJARAN</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="bukupelajaran1.php">VII</a>
              <a class="dropdown-item" href="bukupelajaran2.php">VIII</a>
              <a class="dropdown-item" href="bukupelajaran3.php">IX</a>
            </div>
          </li>
          <a class="nav-item nav-link" href="aboutus.php">ABOUT US</a>
        </div>
        <a class="btn btn-primary" href="signup.php" role="button">SignUp</a>
        <a class="btn btn-primary" href="login.php" role="button">Login</a>

      </div>
    </div>
  </nav>
  <main>