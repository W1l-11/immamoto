@extends('layout.app')

@section('title', 'Dealer')
@section('content')


<div class="max-w-3xl mx-auto">
<!-- Form di sini -->
<div class="bg-gray-100 shadow-md rounded-lg p-6 mt-8">
    <div class="text-center">
        <h2 class="text-xl font-semibold mb-4">Upload Gambar</h2>
    </div>
    <form action="{{ route('dealer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
<div class="mb-4">
<label for="gambar1" class="block text-sm font-medium text-gray-700">Gambar 1:</label>
<input required type="file" name="gambar1" id="gambar1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
</div>
{{-- <div class="mb-4">
<label for="gambar2" class="block text-sm font-medium text-gray-700">Gambar 2:</label>
<input required type="file" name="gambar2" id="gambar2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
</div>
<div class="mb-4">
<label for="gambar3" class="block text-sm font-medium text-gray-700">Gambar 3:</label>
<input required type="file" name="gambar3" id="gambar3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
</div>
<div class="flex justify-center">
<button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Upload</button>
</div> --}}
</div>



<br><br><br>

<!-- Deskripsi kanan -->
<div class="deskripsi flex flex-row justify-between">
<div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden shadow-md rounded">
        <!-- card header -->
        <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase text-xl">
            Masukkan Harga Motor dan Info lainnya
        </div>
        <!-- card body -->
            <div class="p-6 bg-white border-b border-gray-200 font-extralight text-gray-500">
                <!-- content goes here -->
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row justify-between py-4 px-4 gap-4">
                        <label for="merk">Merek Motor:</label>
                        <input required type="text" id="merk" name="merk">
                    </div>
                    <div class="flex flex-row justify-between py-4 px-4 gap-4">
                        <label for="name">Nama Motor:</label>
                        <input required type="text" id="name" name="name">
                    </div>
                    <div class="flex flex-row justify-between py-4 px-4 gap-4">
                        <label for="price">Harga Motor:</label>
                        <input required type="number" id="price" name="price">
                    </div>
                    <div class="flex flex-row justify-between py-4 px-4 gap-4">
                        <label for="released_year">Waktu rilis:</label>
                        <input required type="number" id="released_year" name="released_year">
                    </div>
                    <div class="flex flex-row justify-between py-4 px-4 gap-4">
                        <label for="type">Tipe:</label>
                        <input required type="text" id="type" name="type">
                    </div>
                    <div class="flex flex-row justify-between py-4 px-4 gap-4">
                        <label for="amount">Ketersediaan:</label>
                        <input required type="number" id="amount" name="amount">
                    </div>
                    <div class="flex flex-row justify-between py-4 px-4 gap-4">
                        <label for="used_year">Lama Penggunaan:</label>
                        <input required type="number" id="used_year" name="used_year">
                    </div>
                    <div class="flex flex-row justify-between py-4 px-4 gap-4">
                        <label for="description">Deskripsi:</label>
                        <textarea required class="px-5" id="description" name="description"></textarea>
                    </div>
                </div>
            </div>
            <!-- card footer -->
            <div class="p-8 bg-white border-gray-200 text-center">
                <!-- button submit -->
                <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-3 md:px-28 px-4 rounded-full uppercase shadow-md">Tambahkan ke list</button>
            </div>
        </form>
    </div>
</div>
</div>

@endsection
