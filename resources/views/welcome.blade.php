@extends('layout.app')

@section('title', 'Customer')

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

    .search-bar {
        display: flex;
        align-items: center;
        background-color: #ffffff;
        border: 1px solid #545f71;
        border-radius: 25px;
        margin: 40px 60px;
        padding: 0 15px 0 20px;
        width: 697px;
        height: 49px;
    }

    .search-input {
        flex: 1;
        border: none;
        outline: none;
        background: none;
        padding: 10px;
        font-size: 16px;
    }

    .search-button {
        border: none;
        background-color: #e60000;
        color: white;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-button img {
        width: 20px;
    }

    .filter-button {
    border: none;
    background-color: #e60000;
    color: white;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    margin-left: 10px;
    margin-right: 60px;
    }

    .filter-button img {
    width: 20px;
    }

    .filter-dropdown {
    display: flex;
    position: relative;
    z-index: 1;
    }

    .filter-dropdown {
    padding: 5px 10px;
    }

    .filter-dropdown input[type="checkbox"] {
    margin-right: 10px;
    }

    .filter-f-dropdown {
    display: flex;
    position: relative;
    z-index: 1;
    padding: 5px 10px;
    }

    .slider {
    overflow: hidden;
    width: 100%;
    max-width: 600px;
    margin: auto;
    }

    .slides {
    display: flex;
    transition: transform 2s ease;
    }

    .slides img {
    width: 100%;
    flex: 0 0 auto;
    }

    .recommendation-section {
    text-align: left;
    margin: 20px 0;
    }

    .recommendation-section h2 {
    font-size: 24px;
    color: #000;
    margin-bottom: 10px;
    padding-left: 50px;
    }

    .line {
    height: 2px;
    background-color: #545f71;
    margin: 0 50px;
    }

    .card-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 38px;
    padding: 20px 50px;
    }

    .product-card {
    border: 1px solid #ccc;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
    }

    .product-card img {
    width: 100%;
    height: auto;
    object-fit: cover;
    }

    .card-content {
    padding: 15px;
    text-align: center;
    }

    .card-content h3 {
    margin: 10px 0;
    font-size: 1.1em;
    }

    .card-content p {
    margin: 0;
    font-weight: bold;
    color: #545f71;
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
    #default-carousel {
    z-index: 0;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<!-- Search and Filter Container -->
<div class="search-filter-container">
    <form action="{{ route('customer.search-index') }}" method="GET">
    <div class="search-bar">
            <input type="text" name="search" placeholder="Search" class="search-input">
            <button class="search-button"><img src="{{ asset('search.png') }}" alt="Search"></button>
        </div>
    </form>

</div>

@if (isset($search))
    <div class="recommendation-section">
        <div class="flex flex-row items-center px-16">
            <button class="px-4 py-2 bg-red-500 m-2 rounded-full text-white" onclick="history.back()">Kembali</button>
            <h2>Pencarian {{ $search }}</h2>
        </div>
    <div class="line"></div>
    @if (count($motors) > 0)
        @foreach ($motors as $motor)
        <!-- Card 1 -->
        <div class="card-container">
        <a href="{{ route('customer.view-motor', $motor->id) }}" class="product-card">
            @foreach (explode(',', $motor->image) as $image)
                <img src="{{ asset('motor/'.$image) }}" alt="{{ $motor->image }}">
                @break
            @endforeach
            <div class="card-content">
                <h3>{{ $motor->name }}</h3>
                <p>Rp {{ number_format($motor->price, 2, ',', '.') }}</p>
            </div>
        </a>
        </div>
        @endforeach
    @else
    <br>
        <p class="px-12">Tidak ditemukan {{ $search }}</p>
    @endif
@else
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('motorex.jpg') }}" class="object-scale-down absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('motorex2.jpg') }}" class="object-scale-down absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('motorex2.webp') }}" class="object-scale-down absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="recommendation-section">
        <h2>Promo</h2>
        <div class="line"></div>
    </div>
    <div class="card-container">
        @if (count($promos) > 0)
            @foreach ($motors as $motor)
                <!-- Card 1 -->
                <a href="{{ route('customer.view-motor', $motor->id) }}" class="product-card">
                    @foreach (explode(',', $motor->image) as $image)
                        <img src="{{ asset('motor/'.$image) }}" alt="{{ $motor->image }}">
                        @break
                    @endforeach
                    <div class="card-content">
                        <h3>{{ $motor->name }}</h3>
                        <p>Rp {{ number_format($motor->price, 2, ',', '.') }}</p>
                    </div>
                </a>
            @endforeach
        @else
            <p>Tidak ada promo motor untuk saat ini</p>
        @endif
    </div>

    <!-- Rekomendasi Subtitle and Line -->
    <div class="recommendation-section">
        <h2>Rekomendasi</h2>
        <div class="line"></div>
    </div>

    <!-- Card motor -->

    <div class="card-container">
        @if (count($motors) > 0)
            @foreach ($motors as $motor)
                <!-- Card 1 -->
                <a href="{{ route('customer.view-motor', $motor->id) }}" class="product-card">
                    @foreach (explode(',', $motor->image) as $image)
                        <img src="{{ asset('motor/'.$image) }}" alt="{{ $motor->image }}">
                        @break
                    @endforeach
                    <div class="card-content">
                        <h3>{{ $motor->name }}</h3>
                        <p>Rp {{ number_format($motor->price, 2, ',', '.') }}</p>
                    </div>
                </a>
            @endforeach
        @else
            <p>Tidak ada rekomendasi motor untuk saat ini</p>
        @endif
    </div>
@endif



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="main.js"></script>


@endsection
