@extends('layout.app')

@section('title', 'Pembayaran')

@section('content')
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h2 class="px-14 py-8 font-bold text-2xl">Pembayaran</h2>
<div class="flex flex-col gap-2 px-14 pb-8">
    <form action="{{ route('customer.confirm-payment') }}" method="POST">
        @csrf
        <input type="hidden" name="dealer_id" value="{{ $dealerId }}">
        <input type="hidden" name="send_option_id" value="{{ $sendOptionId }}">
        <input type="hidden" name="payment_id" value="{{ $paymentId }}">
        <input type="hidden" name="motor_id" value="{{ $motorId }}">
        <pre class="font-bold text-lg">Harga motor             : Rp {{number_format($price, 2, ',', '.') }}</pre>
        <pre class="font-bold text-lg">Pajak transfer          : Rp {{number_format($payment->fee, 2, ',', '.') }}</pre>
        <pre class="font-bold text-lg">Biaya pengiriman        : Rp {{number_format($sendOption->cost, 2, ',', '.') }}</pre>
        <pre class="font-bold text-lg">Total pembayaran        : Rp {{number_format($totalPayment, 2, ',', '.') }}</pre>
        <br>
        <button type="submit" class="checkout-bar border-2 h-20 w-full font-bold text-lg text-white kanan flex items-center justify-center bg-red-600 rounded-full">
            Konfirmasi pembelian
        </button>
    </form>
</div>
@endsection
