<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\Promo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $motors = Motor::where('amount', '>', 0)->get();
        $promos = Promo::get();
        return view('welcome', compact('motors', 'promos'));
    }

    public function searchIndex(Request $request)
    {
        $search = $request->search;

        $motors = Motor::where('name', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->orWhere('price', 'like', "%$search%")
            ->orWhere('type', 'like', "%$search%")
            ->orWhere('released_year', 'like', "%$search%")
            ->orWhere('used_year', 'like', "%$search%")->get();

        return view('customer.index', compact('search', 'motors'));
    }
}
