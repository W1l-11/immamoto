<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\Payment;
use App\Models\SendOption;
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

    public function checkoutMotor(Motor $motor)
    {
        $sendOptions = SendOption::get();
        $payments  = Payment::get();
        return view('customer.checkout', compact('motor', 'sendOptions', 'payments'));
    }
}