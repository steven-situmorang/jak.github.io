<html>
    <head>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <title>form login</title>
</head>
<body>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">selmat datang di buku tamu</h1>
        <p class="col-lg-10 fs-4">selamat datang di aplikasi buku tamu berbasis web.kami menyimpan data berupa data tamu yg hendak berkunjung.
            jika anda sudah punya akun silahkan isi username dan password dan login
        </p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="proses_login.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" placeholder="silahkan isi username anda" name="username">
            <label for="username">username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="btn btn-lg btn-success" type="submit">Masuk</button>
          <a href="daftar.php" class="btn btn-lg btn-primary" type="button">daftar</a>
          <hr class="my-4">
          <small class="text-muted">&copy copyright steven2022</small>
        </form>
      </div>
    </div>
  </div>