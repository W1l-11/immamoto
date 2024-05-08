@extends('layout.app')

@section('title', 'Register')

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
                        <h2 class="mt-1 mb-5 pb-1">Daftar</h2>
                    </div>

                    <form method="post" action="{{ route('register-process') }}">
                        @csrf

                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="name">Nama: </label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="KynaMotorOffc" required/>
                        </div>
                        
                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="name">Tipe akun: </label>
                            <select type="text" id="name" name="user_type" class="form-control" placeholder="" required/>
                                <option value="">Pilih tipe akun</option>
                                <option value="dealer">Dealer</option>
                                <option value="customer">Customer</option>
                            </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="email">Email: </label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="user1234@gmail.com" required/>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="number">No Handphone: </label>
                            <input type="tel" id="number" name="number" class="form-control" placeholder="089512341234" required/>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="address">Alamat: </label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Kalimantan Barat, Pontianak,..." required/>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="password">Password: </label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="********" required/>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="retype_password">Konfirmasi Password: </label>
                            <input type="password" id="retype_password" name="retype_password" class="form-control" placeholder="********" required/>
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-danger" type="submit" >Daftar</button>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Sudah Punya Akun?</p>
                            <a href="{{ route('login') }}">Masuk</a>
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
@endsection
