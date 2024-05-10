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

    public function payment(Request $request)
    {
        $price = $request->price;
        $amount = $request->amount;
        $name = $request->name;
        $address = $request->address;
        $sendOption = SendOption::find($request->send_option);
        $payment = Payment::find($request->payment_method);
        $totalPayment = ($price * $amount) + $sendOption->cost + $payment->fee;

        return view('customer.payment', compact('sendOption', 'payment', 'totalPayment', 'price'));
    }
}