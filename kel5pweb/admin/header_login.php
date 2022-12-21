<?php include("../koneksi.php"); ?>

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

    <title></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-5" style="background-color: #002e94">
        <!-- container membuat navbar tidak terlalu menempel ke kiri -->
        <div class="container">
            <a class="navbar-brand" href="#">BimbelKami.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <!-- ml-auto menambahkan margin agar home dll berada di kanan -->
                <ul class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="dashboard_admin.php">HOME</a>
                    <a class="nav-item nav-link" href="input_buku.php">INPUT BUKU</a>
                </ul>
                <a class="btn btn-primary" href="logout_admin.php" role="button">Logout</a>
            </div>
        </div>
    </nav>
    <main>