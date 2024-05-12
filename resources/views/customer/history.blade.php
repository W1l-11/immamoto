@extends('layout.app')

@section('title', 'Riwayat Pembelian')

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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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

        </style>
    </head>
    <body>

{{-- <!-- Content decide -->
<div class="content-button flex flex-row justify-around">
  <div class="left-button w-full">
    <button class="w-full hover:bg-gray-300 py-3" style="border-right: 2px solid #000;">
      <a href="pesanan.php" class="font-bold">Keranjang</a>
    </button>
  </div>
  <div class="right-button w-full">
    <button class="w-full hover:bg-gray-300 py-3">
      <a href="riwayat.php" class="font-bold">Riwayat</a>
    </button>
  </div>
</div> --}}

<br>
<br>

@if (count($transactions) > 0)
<div class="bungkusan grid grid-cols-4 gap-5  px-12">
    @foreach ($transactions as $transaction)
            <a href="{{ route('customer.history-details', $transaction->id) }}" class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96 px-4">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-60">
                {{-- <div class="check flex flex-row-reverse px-4 py-2">
                <input type="checkbox">
                </div> --}}
                @foreach (explode(',', $transaction->motor->image) as $image)
                        <img src="{{ asset('motor/'.$image) }}" alt="{{ $image }}">
                        @break
                @endforeach
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2">
                <p class="block font-sans text-xl antialiased font-medium leading-relaxed text-blue-gray-900">
                    Rp {{ number_format($transaction->total_payment, 2, ',', '.') }}
                </p>
                </div>
                <p class="block font-sans text-lg antialiased font-normal leading-normal text-gray-700 opacity-75">
                    {{ $transaction->motor->name }}
                </p>
            </div>
        <div class="p-6 pt-0">



            {{--
                <form class="max-w-xs mx-auto flex justify-center">
    <div class="relative flex items-center max-w-[8rem]">
        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-red-600 dark:border-gray-600 hover:text-white hover:bg-red-500 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-white-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
        <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-red-600 dark:border-gray-600 hover:text-white hover:bg-red-500 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-white-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </button>
    </div>
</form> --}}

</div>
</a>

@endforeach
<!-- Card -->
@else
<p>Belum ada transaksi motor untuk saat ini</p>
@endif
</div>

{{-- <!-- Checkout bar -->

<div class="checkout-bar flex justify-between border-2 rounded-full">
  <div class="kiri flex flex-row items-center justify-center w-96">
    <input type="checkbox">
    <p class="text-base font-bold px-3">Semua</p>
  </div>
  <div class="tengah flex flex-col py-4">
    <p class="font-bold text-lg">Total : </p>
    <p class="font-bold text-lg">Hemat : </p>
  </div>
  <div class="kanan flex items-center justify-center bg-red-600 w-96 rounded-r-full">
    <a href="timer_payment.php" class="h-full flex items-center">
      <button class="font-bold text-lg text-white">Checkout</button>
    </a>
  </div>
</div> --}}

<br><br><br><br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
@endsection
