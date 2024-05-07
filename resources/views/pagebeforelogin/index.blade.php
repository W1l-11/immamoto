    <!DOCTYPE html>
    <html lang="en">
    <head>
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

.btn-daftar {
    background-color: #ffffff;
    border: 2px solid #545f71;
    color: #545f71;
}

.btn-daftar:hover {
    background-color: #e60000;
    color: #ffffff;
}

.btn-masuk {
    background-color: #e60000;
    border: 2px solid #545f71;
    margin-right: 50px;
}

.btn-masuk:hover {
    background-color: #ffffff;
    color: #545f71;
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
    margin-left: 10px;
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
z-index: 10;
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
z-index: 10;
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
        </style>
    </head>
    <body>

    <!-- Navbar --> 

    <div class="navbar">
    <div class="navbar-logo"><img src="../images/Logo.png" alt=""></div>
    <div class="navbar-buttons">
        <!-- Tombol Daftar -->
        <button class="btn btn-daftar" onclick="window.location.href='signup.php'">Daftar</button>
        <!-- Tombol Masuk -->
        <button class="btn btn-masuk" onclick="window.location.href='login.php'">Masuk</button>
        <!-- Tombol Jual -->
        <button class="btn btn-jual" onclick="window.location.href='login.php'">Jual</button>
    </div>
</div>

    <!-- Extended Navbar --> 

    <nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="index.php">Home</a></li>
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
    <li><a href="#">Keranjang</a></li>
  </ul>
</nav>

<!-- Search and Filter Container -->
<!-- Search and Filter Container -->
<div class="search-filter-container">
    <div class="search-bar">
        <input type="text" placeholder="Search" class="search-input">
        <button class="search-button"><img src="../images/search.png" alt="Search"></button>
    </div>
    <div class="filter-dropdown" style="display:none">
    <form>
        <div>
            <button class="filter-f-button" alt="Filter">press</button>
            <div class="filter-f-dropdown" style="display:none">
            <form>
                <div>
                    <input type="checkbox" id="filter1-1" name="filter1-1">
                    <label for="filter1-1">Filter Option 1</label>
                </div>
                <div>
                    <input type="checkbox" id="filter1-2" name="filter1-2">
                    <label for="filter1-2">Filter Option 2</label>
                </div>
            </form>
            </div>
        </div>
    <div>
        <input type="checkbox" id="filter2" name="filter2">
        <label for="filter2">Filter Option 2</label>
    </div>
    <div>
        <input type="checkbox" id="filter3" name="filter3">
        <label for="filter3">Filter Option 3</label>
    </div>
    </form>
    </div>
    <button class="filter-button"><img src="../images/filter.png" alt="Filter"></button>
</div>

<!-- Image Slider -->



<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../images/cbr250rr.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../images/r6.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../images/zx25r.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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


<!-- Rekomendasi Subtitle and Line -->
<div class="recommendation-section">
    <h2>Rekomendasi</h2>
    <div class="line"></div>
</div>

<!-- Card motor -->

<div class="card-container">
    <!-- Card 1 -->
    <div class="pembungkus px-12">
<a id="card" href="riwayatdetail.php" class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96 px-4 py-2">
  <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-48">
    <img src="../images/zx25r.png" alt="">
  </div>
  <div class="p-6">
    <div class="flex items-center justify-between mb-2">
      <p class="block font-sans text-xl antialiased font-medium leading-relaxed text-blue-gray-900">
        Rp
      </p>
    </div>
    <p class="block font-sans text-lg antialiased font-normal leading-normal text-gray-700 opacity-75">
      Kawasaki ZX-25R
    </p>
  </div>
  <div class="p-6 pt-0">
    </div>
</a>
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
    </body>
    </html>
