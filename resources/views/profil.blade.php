@extends('layout.app')
@section('title', 'Profile')
    

@section('content')
<style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
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

.card-container {
display: grid;
grid-template-columns: repeat(3, 1fr);
gap: 38px;
padding: 20px 150px; 
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
.line  {
    border-bottom: 2px solid #000;
    width: 234px;
}

.product-line {
    width: 1349px;
    height: 51px;
    border: none;
    border-bottom: 2px solid #000; /* Atur warna garis sesuai kebutuhan */
    margin: 0 auto; /* Untuk menengahkan garis */
}

.product-label {
    text-align: center;
    margin-top: -40px; /* Sesuaikan posisi teks agar berada di tengah garis */
}

.product-label p {
    font-size: larger;
    font-weight: 700;
}

        </style>

<!-- Profile -->
<div class="section_awal flex flex-row w-full px-12 gap-10 items-center justify-between">
    <div class="flex flex-row items-center gap-4">
        <div class="profile-pic w-[110px] py-6">
            <img src="../images/bigger_account.png" alt="" width="110px" height="110px">
            <a href="#"><img class="absolute left-32 top-[16rem]" src="../images/plus_pic.png" alt=""></a>
        </div>

        <div class="text_data">
            <p class="font-bold text-3xl" style="color: #545F71;">Nama</p>
            <div class="line"></div>
            <br>
            <p class="font-bold text-lg leading-snug ">Deskripsi</p>
            <p class="font-medium text-lg leading-none">Isi deskripsi</p>
        </div>
    </div>

    <div class="edit_data px-12">
        <button class=""><img src="../images/edit.png" alt=""></button>
    </div>
</div>

<div class="deskripsi_tambahan">
    <div class="flex flex-col px-12">
        <p class="font-bold text-lg">No Telp :      </p>
        <p class="font-bold text-lg">Email :        </p>
        <p class="font-bold text-lg">Alamat :       </p>
    </div>
</div>

<!-- Produk Jual -->

<hr class="product-line"/>
<div class="product-label">
    <p>Produk </p>
</div>

<br>
<br>

<div class="penilaian flex flex-col justify-center items-center">
    <div class="rating_penjualan flex flex-row items-center justify-center">
        <p class="font-bold text-2xl">Beli lagi :</p>
    </div>
    <p class="font-bold text-normal" style="color:#545F71">Lihat Produk Yang Telah Dibeli</p>
</div>

<br>

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
</div>
@endsection