<?php
include "config/koneksi.php";
require 'config/function.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0 ) {
        echo "<script>
              alert('User baru berhasil ditambahkan');
              document.location='index.php';
              </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="" />

    <title>E-ARSIP - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/floating-labels.css" rel="stylesheet" />
  </head>

  <body>
    <form class="form-signin bg-secondary-subtle rounded" method="post" action="">
      <div class="text-center mb-4">
        <img
          class="mb-4"
          src="assets/logo.png"
          alt=""
          width="150"
          height="150"
        />
        <h1 class="h3 mb-3 font-weight-normal">Sign Up E-arsip</h1>
      </div>

      <div class="form-label-group">
     
        <input
          type="text"
          id="username"
          name="username"
          class="form-control"
          placeholder="Email address"
          required
          autofocus
        />
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input
          type="password"
          id="Password"
          name="password"
          class="form-control"
          placeholder="Password"
          required
        />
        <label for="Password">Password</label>
      </div>

      <div class="form-label-group ">
        <input
          type="password"
          id="Password2"
          name="password2"
          class="form-control"
          placeholder="Password"
          required
        />
        <label for="Password2">Masukkan ulang Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" /> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">
        Sign up
      </button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2023-<?=date('Y')?></p>
    </form>
  </body>
</html>
