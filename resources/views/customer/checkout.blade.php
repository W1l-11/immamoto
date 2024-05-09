@extends('layout.app')

@section('title', 'Checkout')

@section('content')

<script>
  tailwind.config = {
    darkMode: "class",
    theme: {
      fontFamily: {
        sans: ["Roboto", "sans-serif"],
        body: ["Roboto", "sans-serif"],
        mono: ["ui-monospace", "monospace"],
      },
    },
    corePlugins: {
      preflight: false,
    },
  };
</script>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            padding: 10px;
        }

        .navbar-logo {
            margin-left: 50px;
        }

        .navbar-buttons {
            margin-right: 20px;
            display: flex;
            justify-items: center;
            align-items: center;
            height: 45px;
        }

        img .btn-profile{
        width: 45px;
        height: 45px;
        }

        .btn {
            padding: 8px 29px;
            margin: 0 10px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 45px;
            color: #ffffff;
        }

        .btn-jual {
            background-color: #e60000;
            border: 2px solid #545f71;
            color: #ffffff;
            position: relative;
            padding-left: 60px;
            padding-right: -20px;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btn-jual::before {
            content: "+";
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            color: #ffffff;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 25px;
            border-radius: 50%;
            font-size: 35px;
        }

        .btn-jual:hover {
            background-color: #ffffff;
            border-color: #545f71;
            color: #545f71;
        }

        .btn-jual:hover::before {
            color: #545f71;
        }

        nav {
        &.primary-navigation {
        margin: 0 auto;
        display: block;

        padding: 5px 0 0 0;
        text-align: center;
        font-size: 16px;

        ul li {
        list-style: none;
        margin: 0 auto;
        display: inline-block;
        padding: 0 30px;
        position: relative;
        text-decoration: none;
        text-align: center;
        font-family: arvo;
        }

        li a {
        color: black;
        }

        li a:hover {
        color: #e60000;
        }

        li:hover {
        cursor: pointer;
        }

        ul li ul {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        padding-left: 0;
        left: 0;
        display: none;
        background: white;
        }

        ul li:hover > ul,
        ul li ul:hover {
        visibility: visible;
        opacity: 1;
        display: block;
        min-width: 250px;
        text-align: left;
        padding-top: 20px;
        box-shadow: 0px 3px 5px -1px #ccc;
        }

        ul li ul li {
        clear: both;
        width: 100%;
        text-align: left;
        margin-bottom: 20px;
        border-style: none;
        }

        ul li ul li a:hover {
        padding-left: 10px;
        border-left: 2px solid #e60000;
        transition: all 0.3s ease;
        }
        }
        }

        a {

        text-decoration: none;

        &:hover {
            color: #3CA0E7;
        }

        }

        ul li ul li a { transition: all 0.5s ease; }

        .primary-navigation ul {
        display: flex;
        justify-content: space-around;
        padding: 7px 0;
        list-style: none;
        border: 1px solid #545f71;
        }

        .primary-navigation li {
        position: relative;
        }

        .primary-navigation li a {
        display: block;
        padding: 10px;
        color: #000;
        text-decoration: none;
        }
        .primary-navigation li:hover > a {
        background-color: #f0f0f0;
        color: #545f71;
        }


        .primary-navigation li ul {
        display: none;
        position: absolute;
        left: 0;
        top: 100%;
        background-color: #fff;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .primary-navigation li:hover ul {
        display: block;
        background-color: #f0f0f0;
        }

        .search-filter-container {
        display: flex;
        align-items: center;
        justify-content: space-between;

        }

        footer {
        background-color: #6f1919;
        color: white;
        text-align: center;
        padding: 40px;
        }

        footer h4, footer ul, footer p {
        margin-bottom: 20px;
        }

        footer ul {
        padding-left: 0;
        list-style-type: none;
        }

        footer li {
        margin-bottom: 10px;
        }

        footer img {
        vertical-align: middle;
        margin-right: 10px;
        }

        #carouselExampleCaptions img {
        width: 1230px;
        height: 375px;
        object-fit: fill;
        }

        #carouselExampleCaptions {
        display: flex;
        justify-content: center; /* Centers the content horizontally */
        }
        .product-line {
            width: 1400px;
            height: 51px;
            border: none;
            border-bottom: 2px solid #000; /* Atur warna garis sesuai kebutuhan */
            margin: 0 auto; /* Untuk menengahkan garis */
        }
        .line  {
            border-bottom: 2px solid #000;
            width: 234px;
        }
        input[type="radio"] {
            color: red;
        }



    </style>

<h2 class="px-14 py-8 font-bold text-2xl">Checkout {{ $motor->name }}</h2>

<br>

<!-- Riwayat atas -->
<!-- Card -->

<div class="riwayat flex flex-row">
<div class="pembungkus px-12">
<a id="card" href="cardview.php" class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96 px-4 py-2">
  <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-48">
    <img src="{{asset('zx25r.png')}}" alt="">
  </div>
  <div class="p-6">
    <div class="flex items-center justify-between mb-2">
      <p class="block font-sans text-xl antialiased font-medium leading-relaxed text-blue-gray-900">
        Rp {{ number_format($motor->price, 2, ',', '.') }}
      </p>
    </div>
    <p class="block font-sans text-lg antialiased font-normal leading-normal text-gray-700 opacity-75">
        {{ $motor->name }}
    </p>
  </div>
  <div class="p-6 pt-0"></div>
</a>
</div>

<div class="deskripsi">
  <div class="flex flex-col gap-2">
        <pre class="font-bold text-lg">Merek Motor      : {{ $motor->merk }}</pre>
        <pre class="font-bold text-lg">Nama Motor       : {{ $motor->name }}</pre>
        <pre class="font-bold text-lg">Tahun Motor      : {{ $motor->released_year }}</pre>
        <pre class="font-bold text-lg">Tipe             : {{ $motor->type }}</pre>
        <pre class="font-bold text-lg">Lama Penggunaan  : {{ $motor->used_year }}</p>
        <pre class="font-bold text-lg">Deskripsi        : {{ $motor->description }}</p>
        <div class="flex flex-row gap-32 items-center">
            <label for="amount" class=" font-bold text-lg" >Jumlah</label>
            <input name="amount" type="number" value="1" class="font-bold text-2xl">
        </div>

  </div>
</div>
</div>

<br>
<br>
<br>

<!-- riwayat bawah -->
<div class="Deskripsi_akhir px-16">
<div class="deskripsi_bawah">
  <div class="flex flex-col gap-2">
        <label for="username">Nama penerima</label>
        <input type="text" value="{{ auth()->user()->name }}" name="name" class="font-bold text-lg">
        <label for="address">Alamat pengiriman</label>
        <input type="text" value="{{ auth()->user()->address }}" name="address" class="font-bold text-lg">
        <label for="send_option">Opsi pengiriman</label>
        <select value="{{ auth()->user()->address }}" name="send_option" class="font-bold text-lg">
            <option value="">Pilih opsi pengiriman</option>
            @foreach ($sendOptions as $sendOption)
                <option value="{{ $sendOption->id }}">{{ $sendOption->name }}</option>
            @endforeach
        </select>
  </div>
</div>
<br>
<div class="deskripsi_bawah_lanjutan">
  <div class="flex flex-col gap-2">
        <p class="font-bold text-lg">Subtotal :      </p>
        <pre class="font-bold text-lg">Biaya Pengiriman : </pre>
        <pre class="font-bold text-lg">Potongan Harga   : </pre>
        <pre class="font-bold text-lg">Total Harga      : </pre>
  </div>
</div>
{{-- <div class="judul">
  <p class="font-bold text-3xl">Rincian Pembayaran</p>
</div> --}}
</div>

<br>

<div class="riwayat flex flex-row w-full">
    <div class="pembungkus w-full">
        <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-full px-4 py-2">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                <p class="font-bold text-2xl">Pembayaran Melalui Virtual Account</p>
                <div class="isi_card flex flex-row justify-between">
                    <div class="payment_option py-8 px-4 gap-2">
                        @foreach ($payments as $payment)
                            <div class="flex flex-row items-center gap-2">
                                <input type="radio" value="{{ $payment->id }}" name="payment_method">
                                <img src="{{asset($payment->name.'.png')}}" alt="" class="w-24 px-4 object-scale-down">
                                <p class="font-bold text-base">{{ $payment->name }}</p>
                            </div>
                        @endforeach
                        {{-- <div class="mandiri flex flex-row items-center gap-2">
                            <input type="radio" name="payment_method">
                            <img src="{{asset('mandiri.png')}}" alt="" class="w-24 px-4 object-scale-down">
                            <p class="font-bold text-base">Bank Mandiri</p>
                        </div>
                        <div class="bni flex flex-row items-center gap-2">
                            <input type="radio" name="payment_method">
                            <img src="{{asset('bni.png')}}" alt="" class="w-24 px-4 object-scale-down">
                            <p class="font-bold text-base">Bank BNI</p>
                        </div>
                        <div class="bri flex flex-row items-center gap-2">
                            <input type="radio" name="payment_method">
                            <img src="{{asset('bri.png')}}" alt="" class="w-24 px-4 object-scale-down">
                            <p class="font-bold text-base">Bank BRI</p>
                        </div> --}}
                    </div>
                    <div class="deskripsi_kanan">
                        <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-[40rem] h-[16rem]">
                            <div class="p-6">
                                <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                    Ketentuan
                                </h5>
                                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                    - Pilih metode pembayaran yang tersedia untuk melanjutkan pembayaran produk.
                                </p>
                                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                    - Mohon selesaikan pembayaran sebelum batas waktu pembayaran berakhir untuk menghindari pembatalan otomatis.
                                </p>
                                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                    - Jika pembayarn telah dibatalkan secara otomatis, silahkan ajukan pembayaran ulang kembali.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="checkout-bar flex justify-between border-2 rounded-full">
    <div class="kiri flex flex-row items-center justify-center w-96">
        <p class="text-base font-bold px-3 text-white">.</p>
    </div>
    <div class="tengah flex flex-col py-4">
        <p class="font-bold text-lg">Total : </p>
        {{-- <p class="font-bold text-lg">Hemat : </p> --}}
    </div>
    <button type="button" data-modal-toggle="modal" data-modal-target="modal" class="font-bold text-lg text-white kanan flex items-center justify-center bg-red-600 w-96 rounded-r-full">
        Checkout
    </button>
</div>

<br><br><br>

<!-- Modal -->
<div id="modal" class="fixed inset-0 z-50 hidden items-center justify-center">
  <div class="modal-overlay absolute inset-0 bg-gray-900 opacity-50"></div>

  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <!-- Bagian isi modal -->
    <div class="modal-content py-4 text-left px-6">
      <!-- Tombol tutup modal -->
      <div class="flex justify-between items-center pb-3">
        <p class="font-bold text-2xl">Pembayaran</p>
        <button data-modal-hide="modal" id="close-modal" class="modal-close px-4 py-2 bg-gray-800 text-white text-xl rounded-full focus:outline-none">&times;</button>
      </div>
      <p class="mb-2">Rincian Pembayaran: </p>
      <!-- Isi rincian pembayaran disini -->
      <p class="mb-2">Total Pembayaran: </p>
      <p class="mb-4">Nomor Virtual Account: </p>
      <!-- Jika perlu tambahkan rincian lainnya -->
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="main.js"></script>
<script>
  // Ambil tombol "Checkout" dan modal
  const checkoutBtn = document.querySelector('.checkout-bar button');
  const modal = document.getElementById('modal');

  // Ambil tombol tutup modal
  const closeBtn = document.getElementById('close-modal');

  // Ketika tombol "Checkout" ditekan, tampilkan modal
  checkoutBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
  });

  // Ketika tombol tutup modal ditekan, sembunyikan modal
  closeBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  // Jika pengguna mengklik di luar modal, sembunyikan modal
  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.classList.add('hidden');
    }
  });

</script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
@endsection
