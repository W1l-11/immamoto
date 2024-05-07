<?php 
require 'function.php';

if(isset($_POST["daftar"]) ) {

  // cek apakah data berhasil di tambahkan atau tidak
  if( registrasidealer( $_POST) > 0 ){
      echo "
      <script>
      alert('Akun Berhasil Ditambahkan!');
      document.location.href = '../pageafterlogin/jual.php';
      </script>
      ";
  } else {
      echo "
      <script>
      alert('Akun gagal Ditambahkan!');
      </script>
      ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Immamoto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
.gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom, #c01010, #471010);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom , #c01010, #471010);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    </style>
</head>
<body>


<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <h2 class="mt-1 mb-5 pb-1">Daftar Akun Dealer</h2>
                </div>

                <form method="post" action="">
                <?php if (!empty($error_message)) : ?>
                  <div class="error-message text-danger"><?= $error_message ?></div>
                    <br>
                  <?php endif; ?>
                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="nama_dealer">Nama Dealer: </label>
                    <input type="text" id="nama_dealer" name="nama_dealer" class="form-control" placeholder="KynaMotorOffc" required/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="username">Username: </label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="user1234" required/>
                  </div>
                  
                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="nomor_wa">No Whatsapp: </label>
                    <input type="text" id="nomor_wa" name="nomor_wa" class="form-control" placeholder="089512341234" required/>
                  </div>
                    
                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="alamat">Alamat: </label>
                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Kalimantan Barat, Pontianak,..." required/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="password">Password: </label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="********" required/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="password2">Konfirmasi Password: </label>
                    <input type="password" id="password2" name="password2" class="form-control" placeholder="********" required/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-danger" name="daftar" id="daftar" type="submit" >Daftar</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Sudah Punya Akun Dealer?</p>
                    <a href="login.php">Masuk</a>                   
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-2 d-flex justify-content-center">SELAMAT DATANG DI</h4>
                <h2 class="mb-4 d-flex justify-content-center">IMMAMOTO.COM</h2>
                <p class="small mb-0">Sebuah web jual-beli kendaraan motor (bekas & baru).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
