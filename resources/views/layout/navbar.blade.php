<div class="navbar">
    <div class="navbar-logo"><img src="{{asset('Logo.png')}}" alt=""></div>
        <div class="navbar-buttons">
            <!-- Tombol Daftar -->
            <a href="{{ route('register') }}" class="btn btn-daftar">Daftar</a>
            <!-- Tombol Masuk -->
            <a href="{{ route('login') }}" class="btn btn-masuk">Masuk</a>
            
            @auth
                <!-- Tombol Jual -->
                <a href="" class="btn btn-jual">Jual</a>

                <a href="{{ route('logout') }}" class="text-red-700 font-bold">Logout</a>
            @endauth
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
    <div class="search-filter-container">
        <div class="search-bar">
            <input type="text" placeholder="Search" class="search-input">
            <button class="search-button"><img src="{{ asset('search.png') }}" alt="Search"></button>
        </div>
        <div class="filter-dropdown" style="display:none">
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
        <form>
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
        <button class="filter-button"><img src="{{ asset('filter.png') }}" alt="Filter"></button>

        <!-- Search and Filter Container -->
        {{-- <div class="search-filter-container">
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
        </div> --}}

</div>
