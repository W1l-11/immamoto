@extends('layout.app')

@section('title', 'Login')

@section('content')
<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <h2 class="mt-1 mb-5 pb-1">Masuk</h2>
                </div>

                <form method="post" action="{{ route('login-process') }}">
                    @csrf
                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="email">Email: </label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="user@example.com" required/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="password">Password: </label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="********" required/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-danger" name="login" id="login" type="submit" >Masuk</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Belum Punya Akun?</p>
                    <a href="{{ route('register') }}">Buat Sekarang</a>
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
@endsection
