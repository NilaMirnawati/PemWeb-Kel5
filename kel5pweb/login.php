<!-- halaman login -->

<?php
session_start();
include("header.php");
?>

<div class="container">
  <div class="row">
    <div class="col">
      <img src="img/gambar1.png" class="card-img" />
    </div>
    <div class="col-lg-6 col-md-4">
      <p></p>
      <h2 class="text-center">Login</h2>
      <p></p>
      <p class="text-center">Don't have an account? <a href="signup.html">Sign Up</a></p>
      <div class="position-relative mx-auto my-5" style="max-width: 400px">
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
      </div>
      <div>
        <?php
        if (isset($_POST['login-btn'])) {

          $username = $_POST['username'];
          $password = $_POST['password'];
          //$_SESSION['login'] = false
        
          $query_login_user = mysqli_query($koneksi, "SELECT * FROM user WHERE (usrnm_user = '" . $username . "' AND pw_user = '" . $password . "')");

          $data_user = mysqli_fetch_array($query_login_user);

          $query_login_admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE (usrnm_admin = '" . $username . "' AND pw_admin = '" . $password . "')");

          $data_admin = mysqli_fetch_array($query_login_admin);

          if (mysqli_num_rows($query_login_user) > 0 or mysqli_num_rows($query_login_admin) > 0) {

            if (mysqli_num_rows($query_login_user) > 0) {
              $_SESSION['login_user'] = true;
              $_SESSION['id_user'] = $data_user[0];
              $_SESSION['username_user'] = $data_user[1];

              echo '<script>window.location = "dashboard.php"</script>';
            } else if (mysqli_num_rows($query_login_admin) > 0) {
              if (mysqli_num_rows($query_login_admin) > 0) {
                $_SESSION['login_admin'] = true;
                $_SESSION['id_admin'] = $data_admin[0];
                $_SESSION['username_admin'] = $data_admin[1];

                echo '<script>window.location = "admin/input_buku.php"</script>';
              }
            }
          } else {
            echo '<script>alert("Username atau Password salah!")</script>';
          }

        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php") ?>