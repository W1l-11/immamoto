<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Exception;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index()
    {
        return view('dealer.index');
    }

    public function store(Request $request)
    {
        try {
            $motor = new Motor();
            $motor['name'] = $request->name;
            $motor['merk'] = $request->merk;
            $motor['price'] = $request->price;
            $motor['released_year'] = $request->released_year;
            $motor['type'] = $request->type;
            $motor['amount'] = $request->amount;
            $motor['used_year'] = $request->used_year;
            $motor['description'] = $request->description;
            $motor['dealer_id'] = auth()->user()->id;

            $gambar1 = $request->gambar1->getClientOriginalName();
            $gambar2 = $request->gambar2->getClientOriginalName();
            $gambar3 = $request->gambar3->getClientOriginalName();

            $gambarString = implode(',', [$gambar1, $gambar2, $gambar3]);
            $motor['image'] = $gambarString;

            $folderPath = "motor/";

            $fileName = $request->gambar1->getClientOriginalName();
            $request->validate(['gambar1' => 'required|image|mimes:png,jpg,jpeg,webp']);
            $file = $request->file('gambar1');
            $filePath = $folderPath . $fileName;
            move_uploaded_file($file->path(), $filePath);

            $fileName = $request->gambar2->getClientOriginalName();
            $request->validate(['gambar2' => 'required|image|mimes:png,jpg,jpeg,webp']);
            $file = $request->file('gambar2');
            $filePath = $folderPath . $fileName;
            move_uploaded_file($file->path(), $filePath);

            $fileName = $request->gambar3->getClientOriginalName();
            $request->validate(['gambar3' => 'required|image|mimes:png,jpg,jpeg,webp']);
            $file = $request->file('gambar3');
            $filePath = $folderPath . $fileName;
            move_uploaded_file($file->path(), $filePath);
            $motor->save();

            alert('Upload sukses', 'Sukses mengupload motormu', 'success');
        } catch (Exception $error) {
            alert('Upload gagal', 'Gagal mengupload motormu', 'error');
            return back()->withInput();
        } finally {
            alert('Upload sukses', 'Sukses mengupload motormu', 'success');
            return redirect()->route('dealer.index');
        }

        // dd($request->all());
    }
}
