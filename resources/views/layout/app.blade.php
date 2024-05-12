<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | {{ config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        {{-- <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet" /> --}}
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
        {{-- <script src="https://cdn.tailwindcss.com/3.3.0"></script> --}}
        <link rel="stylesheet" href="">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @vite('resources/css/app.css')
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
                display: flex;
                justify-items: center;
                align-content: center;
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
        </style>
    </head>
    <body>
        @once
        @unless (request()->is('register') || request()->is('login'))
        @include('layout.navbar')
        @endunless
        @endonce

        <main>
            @include('sweetalert::alert')
            @yield('content')
        </main>

        @once
        @unless (request()->is('register') || request()->is('login'))
                @include('layout.footer')
            @endunless
        @endonce
        <script src="main.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    </body>
</html>
