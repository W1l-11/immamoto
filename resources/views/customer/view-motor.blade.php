@extends('layout.app')

@section('title', $motor->name )
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
    </style>


<!-- Gambar Utama -->
<div
  id="carouselExampleCaptions"
  class="relative"
  data-twe-carousel-init
  data-twe-ride="carousel">
  <!--Carousel indicators-->
  <div
    class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
    data-twe-carousel-indicators>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="0"
      data-twe-carousel-active
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="1"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="2"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 3"></button>
  </div>

  <!--Carousel items-->
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!--First item-->
    <div
      class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-active
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <img
        src="{{asset('r6.jpeg')}}"
        class="block w-full object-scale-down"
        alt="..." />
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
        <h5 class="text-xl">Front Body</h5>
      </div>
    </div>
    <!--Second item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <img
        src="{{asset('zx25r.png')}}"
        class="block w-full object-scale-down"
        alt="..." />
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
        <h5 class="text-xl">Back Body</h5>
      </div>
    </div>
    <!--Third item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <img
        src="{{asset('cbr250rr.png')}}"
        class="block w-full object-scale-down"
        alt="..." />
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
        <h5 class="text-xl">Side Body</h5>
      </div>
    </div>
  </div>

  <!--Carousel controls - prev item-->
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-twe-target="#carouselExampleCaptions"
    data-twe-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="black"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <!--Carousel controls - next item-->
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-twe-target="#carouselExampleCaptions"
    data-twe-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="black"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>

<!-- Deskripsi kanan -->
<div class="deskripsi flex flex-row justify-between">
  <div class="deskripsi-kiri">
  <div class="flex flex-col px-20 py-24 gap-2">
        <pre class="font-bold text-lg">Merek Motor      : {{ $motor->merk }}</pre>
        <pre class="font-bold text-lg">Nama Motor       : {{ $motor->name }}</pre>
        <pre class="font-bold text-lg">Tahun Motor      : {{ $motor->released_year }}</pre>
        <pre class="font-bold text-lg">Jarak penggunaan : {{ $motor->used_year }}</pre>
        <pre class="font-bold text-lg">Ketersediaan     : {{ $motor->amount }}</pre>
        <br>
        <pre class="font-bold text-lg">Deskripsi        : {{ $motor->description }}</pre>
    </div>
  </div>
  <div class="deskripsi-kanan px-12 py-24">
  <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden shadow-md rounded">
        <!-- card header -->
        <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase text-xl">
            Rp {{ number_format($motor->price, 2, ',', '.') }}
        </div>
        <div class="px-6 py-4 bg-white border-b font-bold uppercase text-base">
            {{ $motor->name }}
        </div>

        <!-- card body -->
        <div class="p-6 bg-white border-b border-gray-200 font-extralight text-gray-500">
            <!-- content goes here -->
            Masih baru cuy
        </div>

        <!-- card footer -->
        <div class="p-8 bg-white border-gray-200 text-center">
            <!-- button link -->
            <a class="bg-red-500 shadow-md text-sm text-white font-bold py-3 md:px-28 px-4 hover:bg-red-400 rounded-full uppercase" 
                href="#">Checkout</a>
        </div>
    </div>
</div>
  </div>
</div>

@endsection
