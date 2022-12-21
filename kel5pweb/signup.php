<?php include("header_login.php"); ?>

<div class="container mb-5">
  <div class="row mb-5">
    <div class="col">
      <img src="img/gambar1.png" class="card-img" />
    </div>
    <div class="col-lg-6 col-md-4">
      <p></p>
      <h2 class="text-center">Create new Account</h2>
      <p></p>
      <p class="text-center">Already Registered? <a href="login.html">Login</a></p>
      <div class="position-relative mx-auto my-5" style="max-width: 400px">
        <p class="text-start mt-3">Nama</p>
        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Full Name" />
        <p class="text-start mt-3">Email</p>
        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email" placeholder="example@gmail.com" />
        <p class="text-start mt-3">Password</p>
        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="password" placeholder="******" />
        <p class="text-start mt-3">Date of Birth</p>
        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="date" />
        <button type="button" class="btn btn-primary py-2 my-4 d-grid col-12 mx-auto">SignUp</button>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>