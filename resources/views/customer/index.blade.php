@extends('layout.app')

@section('title', 'Customer')

@section('content')
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
    <div class="product-card">
        <img src="motor1.png" alt="Motor 1">
        <div class="card-content">
            <h3>Motor 1</h3>
            <p>Rp 50.000.000</p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="product-card">
        <img src="motor1.png" alt="Motor 1">
        <div class="card-content">
            <h3>Motor 1</h3>
            <p>Rp 50.000.000</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="product-card">
        <img src="motor1.png" alt="Motor 1">
        <div class="card-content">
            <h3>Motor 1</h3>
            <p>Rp 50.000.000</p>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="product-card">
        <img src="motor1.png" alt="Motor 1">
        <div class="card-content">
            <h3>Motor 1</h3>
            <p>Rp 50.000.000</p>
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

@endsection
