<?php
include("session_admin.php");
include("header_login.php");

$judul = "";
$mapel = "";
$kelas = "";
$harga = "";
$gambar_buku = "";
$error = "";
$sukses = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = "";
}

if ($id != "") {
    $sql1 = "select * from buku where ID_BUKU = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $judul = $r1['judul'];
    $mapel = $r1['mapel'];
    $kelas = $r1['kelas'];
    $harga = $r1['harga'];
    $gambar_buku = $r1['gambar_buku'];

    if ($judul == '') {
        $error = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $mapel = $_POST['mapel'];
    $kelas = $_POST['kelas'];
    $harga = $_POST['harga'];
    $gambar_buku = $_POST['gambar_buku'];

    if ($judul == '' or $mapel == '' or $kelas == '' or $harga == '') {
        $error = "Kolom Judul, Mata pelajaran, Kelas, dan Harga wajib diisi!";
    }
    if (empty($error)) {

        if ($id != "") {
            $sql1 = "update buku set judul = '$judul', mapel='$mapel',kelas='$kelas',harga='$harga', gambar_buku = '$gambar_buku' where ID_BUKU = '$id'";
        } else {
            $sql1 = "insert into buku(judul, mapel, kelas, harga, gambar_buku) values('$judul', '$mapel', '$kelas', '$harga', '$gambar_buku')";
        }

        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Sukses memasukkan data";
            $judul = '';
            $mapel = '';
            $kelas = '';
            $harga = '';
            $gambar_buku = '';

            if ($id != '') {


            }

        } else {
            $error = "Gagal memasukkan data";
        }
    }
}

?>
<!-- <div class="container" style="height: 100px"> </div> -->
<div class="col-sm-8 offset-sm-2 px-auto">
    <h1>Halaman Admin Input Buku</h1>
    <div class="mb-3 row">
        <a href="#">
            << Kembali ke halaman admin</a>
    </div>
    <?php
    if ($error) {
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $error ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
    </div>
    <?php
    }
    ?>
    <?php
    if ($sukses) {
        if ($id == '') { ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php echo $sukses ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
    </div>
    <?php } else { ?>
    <?php header("location:dashboard_admin.php"); ?>
</div>
<?php
        }
    ?>
<?php
    }
    ?>

<form action="" method="post">
    <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">Judul buku</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="mapel" class="col-sm-2 col-form-label">Mata pelajaran</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="mapel" value="<?php echo $mapel ?>" name="mapel">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kelas" value="<?php echo $kelas ?>" name="kelas">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="harga" value="<?php echo $harga ?>" name="harga">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="gambar_buku" class="col-sm-2 col-form-label">Gambar buku</label>
        <div class="col-sm-10">
            <textarea name="gambar_buku" class="form-control" id="summernote"><?php echo $gambar_buku ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
        </div>
    </div>
</form>
</div>

<?php include("footer.php") ?>