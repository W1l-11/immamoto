<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $motors = Motor::get();
        return view('customer.index', compact('motors'));
    }

    public function viewMotor(Motor $motor)
    {
        return view('customer.view-motor', compact('motor'));
    }
}