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
            $motor['image'] = $request->gambar1->getClientOriginalName();

            $folderPath = "motor/";
            $fileName = $request->gambar1->getClientOriginalName();
            // $fileName = $motor['image'];

            // dd($request->gambar1->getClientOriginalName());
            $request->validate(['gambar1' => 'required|image|mimes:png,jpg,jpeg,webp']);
            $file = $request->file('gambar1');
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
