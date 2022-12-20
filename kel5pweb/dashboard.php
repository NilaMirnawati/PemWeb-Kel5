<!-- halaman dashboard hanya bisa diakses ketika sudah login -->


<?php
include("session.php");
include("header_login.php");

?>

<div class="container">
    <div class="row">
        <div class="col ">
            <img src="img/gambar1.png" class="card-img" />
        </div>
        <span class="col-lg-6 col-md-4 text-center align-middle">
            <h2>Selamat Datang
                <?php echo $_SESSION['username_user']; ?>
            </h2>
            <h2>--</h2>
            <p>Ayo mulai bergerak untuk meraih mimpi.
                <br>Yuk klik video pembelajaran dari kami.
            </p>
        </span>
    </div>
</div>

<?php include("footer.php"); ?>