<div class="container py-5" id="daftarBuku">
    <div class="overflow-auto">
        <?php
            $sukses = "";
            $katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
            if (isset($_GET['op'])) {
                $op = $_GET['op'];
            } else {
                $op = "";
            }
            if ($op == 'delete') {
                $id = $_GET['id'];
                $sql1 = "delete from buku where ID_BUKU = '$id'";
                $q1 = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses = "Berhasil hapus data buku";
                }
            }
            ?>
        <?php
            if ($sukses) {
            ?>
        <div class="alert alert-primary" role="alert">
            <?php echo $sukses ?>
        </div>
        <?php
            }
            ?>
        <form class="row g-3 mb-3" method="get">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci"
                    value="<?php echo $katakunci ?>" />
            </div>
            <div class="col-auto">
                <input type="submit" name="cari" value="Cari Buku" class="btn btn-secondary" />
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Judul Buku</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                    <th>Harga</th>
                    <th>Gambar Buku</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sqltambahan = "";
                    $per_buku = 10;
                    if ($katakunci != '') {
                        $array_katakunci = explode(" ", $katakunci);
                        for ($x = 0; $x < count($array_katakunci); $x++) {
                            $sqlcari[] = "(judul like '%" . $array_katakunci[$x] . "%' or mapel like '%" . $array_katakunci[$x] . "%' or kelas like '%" . $array_katakunci[$x] . "%')";
                        }
                        $sqltambahan = " where " . implode(" or ", $sqlcari);
                    }
                    $sql1 = "select * from buku $sqltambahan";
                    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                    $mulai = ($page > 1) ? ($page * $per_buku) - $per_buku : 0;
                    $q1 = mysqli_query($koneksi, $sql1);
                    $total = mysqli_num_rows($q1);
                    $pages = ceil($total / $per_buku);
                    $nomor = $mulai + 1;
                    $sql1 = $sql1 . " order by ID_BUKU asc limit $mulai,$per_buku";

                    $q1 = mysqli_query($koneksi, $sql1);

                    while ($r1 = mysqli_fetch_array($q1)) {
                    ?>
                <tr>
                    <td>
                        <?php echo $nomor++ ?>
                    </td>
                    <td>
                        <?php echo $r1['judul'] ?>
                    </td>
                    <td>
                        <?php echo $r1['mapel'] ?>
                    </td>
                    <td>
                        <?php echo $r1['kelas'] ?>
                    </td>
                    <td>
                        <?php echo $r1['harga'] ?>
                    </td>
                    <td>
                        <?php echo $r1['gambar_buku'] ?>
                    </td>
                    <td>
                        <a href="input_buku.php?id=<?php echo $r1['ID_BUKU'] ?>">
                            <span class="badge bg-warning text-dark">Edit</span>
                        </a>

                        <a href="dashboard.php?op=delete&id=<?php echo $r1['ID_BUKU'] ?>"
                            onclick="return confirm('Apakah yakin ingin menghapus data buku?')">
                            <span class="badge bg-danger text-light">Delete</span>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                    ?>

            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                    $cari = isset($_GET['cari']) ? $_GET['cari'] : "";

                    for ($i = 1; $i <= $pages; $i++) {
                    ?>
                <li class="page-item">
                    <a class="page-link"
                        href="dashboard.php?katakunci=<?php echo $katakunci ?>&cari=<?php echo $cari ?>&page=<?php echo $i ?>">
                        <?php echo $i ?>
                    </a>
                </li>
                <?php
                    }
                    ?>
            </ul>
        </nav>
    </div>
</div>