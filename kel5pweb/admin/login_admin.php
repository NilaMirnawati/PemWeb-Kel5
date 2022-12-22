<?php
include("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <div class="main d-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-md-4">
            <br><br><br><br><br><br>
            <h2 class="text-center">Login Admin</h2>
            <div class="mx-auto mb-5" style="max-width: 400px">
                <form action="" method="post">
                    <div>
                        <p class="text-start mt-3">Username</p>
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" name="username" type="text"
                            placeholder="example0934" />
                        <p class="text-start mt-3">Password</p>
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" name="password" type="password"
                            placeholder="******" />
                        <button type="submit" name="login-btn"
                            class="btn btn-primary pt-2 mt-4 d-grid col-12 mx-auto">Login</button>
                    </div>
                </form>

                <a class="btn btn-primary text-center my-2" href="../login.php" role="button">Kembali ke halaman login user</a>
            </div>
            <div>
                <?php
                if (isset($_POST['login-btn'])) {
                    session_start();
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    //$_SESSION['login'] = false
                
                    $query_login_admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE (usrnm_admin = '" . $username . "' AND pw_admin = '" . $password . "')");

                    $data_admin = mysqli_fetch_array($query_login_admin);


                    if (mysqli_num_rows($query_login_admin) > 0) {
                        $_SESSION['login_admin'] = true;
                        $_SESSION['id_admin'] = $data_admin[0];
                        $_SESSION['username_admin'] = $data_admin[1];

                        echo '<script>window.location = "dashboard_admin.php"</script>';
                    } else {
                        echo '<script>alert("Username atau Password salah!")</script>';
                    }


                }

               /*  if (isset($_POST['back-btn'])) {
                    header("location:../login.php");
                } */
                ?>
            </div>
        </div>
    </div>
</body>

</html>