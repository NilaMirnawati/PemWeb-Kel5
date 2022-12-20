<!-- halaman dashboard hanya bisa diakses ketika sudah login -->


<?php
include("session.php");
include("header_login.php");

?>
<div class="container">
    <span class="col-lg-6 col-md-4 text-center align-middle">
        <h2>Selamat Datang
            <?php echo $_SESSION['username_admin']; ?>
        </h2>
        <h2>--</h2>
        <p>Ayo mulai bergerak untuk meraih mimpi.
            <br>Yuk klik video pembelajaran dari kami.
        </p>
    </span>
</div>

<div class="container border text-center col-lg-10 py-4">

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#daftarBuku">Daftar Buku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Daftar Video</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Daftar Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>

    <?php include("daftar_buku.php"); ?>


</div>
<?php include("footer.php"); ?>