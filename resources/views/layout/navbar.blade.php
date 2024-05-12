<div class="navbar">
    <div class="navbar-logo"><img src="{{asset('Logo.png')}}" alt=""></div>
        <div class="navbar-buttons">
            @if (!auth()->user())
                <!-- Tombol Daftar -->
                <a href="{{ route('register') }}" class="btn btn-daftar">Daftar</a>
                <!-- Tombol Masuk -->
                <a href="{{ route('login') }}" class="btn btn-masuk">Masuk</a>
            @else
                @auth
                    <!-- Tombol Jual -->
                    @if (auth()->user()->user_type == 'dealer')
                        <a href="" class="btn btn-jual">Jual</a>
                    @endif
                    <a href="#" class="btn btn-profile"><img src="{{ asset('account.png') }}" alt="Profile" width="45px" height="45px"></a>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                @endauth
            @endif
        </div>
    </div>

    <!-- Extended Navbar -->

    <nav role="navigation" class="primary-navigation">
        <ul>
            <li><a href="{{ route('customer.index') }}">Home</a></li>
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
            <li><a href="{{ route('customer.history') }}">Riwayat Pembelian</a></li>
        </ul>
    </nav>

    @unless (!request()->is('view-motor'))

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
        </div>
    @endunless
    <!-- Search and Filter Container -->

</div>
