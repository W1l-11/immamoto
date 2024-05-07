<!DOCTYPE html>
    <html lang="en">
    <head>
    <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
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

    <!-- Navbar --> 

    <!-- Navbar --> 

    <div class="navbar">
        <div class="navbar-logo"><img src="../images/Logo.png" alt=""></div>
        <div class="navbar-buttons">
            <!-- Tombol Profile -->
            <button class="btn btn-profile" onclick="window.location.href='profil.php'"><img src="../images/account.png" alt="Profile" width="45px" height="45px"></button>
            <!-- Tombol Jual -->
            <button class="btn btn-jual" onclick="window.location.href='dealersign.php'">Jual</button>
        </div>
    </div>

    <!-- Extended Navbar --> 

    <nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="../pageafterlogin/index_login.php">Home</a></li>
    <li><a href="#">Kategori &dtrif;</a>
    <ul class="dropdown">
        <li><a href="#">Super Bike</a></li>
        <li><a href="#">Sports Bike</a></li>
        <li><a href="#">Scooter</a></li>
        <li><a href="#">Normal</a></li>
      </ul>
    <li>
        <a href="#">Pemakaian &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Bekas</a></li>
        <li><a href="#">Baru</a></li>
      </ul>
    </li>
    <li><a href="#">Lokasi</a></li>
    <li><a href="../pageafterlogin/pesanan.php">Pesanan</a></li>
  </ul>
</nav>

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
        src="../images/r6.jpeg"
        class="block w-full"
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
        src="../images/zx25r.png"
        class="block w-full"
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
        src="../images/cbr250rr.png"
        class="block w-full"
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
        <p class="font-bold text-lg">Merek Motor :      </p>
        <p class="font-bold text-lg">Nama Motor :        </p>
        <p class="font-bold text-lg">Tahun Motor :       </p>
        <p class="font-bold text-lg">Model :      </p>
        <p class="font-bold text-lg">Jarak :        </p>
        <p class="font-bold text-lg">Ketersediaan :       </p>
        <br>
        <p class="font-bold text-lg">Deskripsi :       </p>
    </div>
  </div>
  <div class="deskripsi-kanan px-12 py-24">
  <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden shadow-md rounded">
        <!-- card header -->
        <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase text-xl">
            Harga motor
        </div>
        <div class="px-6 py-4 bg-white border-b font-bold uppercase text-base">
            Nama motor
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

<!-- Footer -->
<footer style="background-color: #6f1919; color: white; text-align: center; padding: 20px;">
    <div style="display: flex; justify-content: space-between;">
        <div style="flex-basis: 20%;">
            <h4>IMMAMOTO</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li>Our Team</li>
                <li>Contact Support</li>
            </ul>
        </div>
        <div style="flex-basis: 20%;">
            <h4>Kategori Populer</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li>Motor Sport</li>
                <li>Super Bike</li>
                <li>Naked Bike</li>
                <li>Normal Bike</li>
            </ul>
        </div>
        <div style="flex-basis: 20%;">
            <h4>Hubungi Kami</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li>0812-3278-6221</li>
            </ul>
        </div>
        <div style="flex-basis: 20%;">
            <h4>Media Sosial</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li><img src="instagram.png" alt="">@immamoto</li>
                <li><img src="facebook (1).png" alt="">@immamoto</li>
                <li><img src="twitter.png" alt="">@immamoto</li>
            </ul>
        </div>
    </div>
    <p>&copy; 2024 ImmaMoto. All Rights Reserved.</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    </body>
    </html>
