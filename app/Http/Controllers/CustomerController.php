<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\Payment;
use App\Models\Promo;
use App\Models\SendOption;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $motors = Motor::where('amount', '>', 0)->get();
        $promos = Promo::get();
        return view('customer.index', compact('motors', 'promos'));
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
        $dealerId = $request->dealer_id;
        $motorId = $request->motor_id;
        $price = $request->price;
        $amount = $request->amount;
        $name = $request->name;
        $address = $request->address;
        $sendOption = SendOption::find($request->send_option);
        $sendOptionId = $sendOption->id;
        $payment = Payment::find($request->payment_method);
        $paymentId = $payment->id;
        $totalPayment = ($price * $amount) + $sendOption->cost + $payment->fee;

        return view('customer.payment', compact('amount', 'sendOptionId', 'paymentId', 'motorId', 'dealerId', 'sendOption', 'payment', 'totalPayment', 'price'));
    }

    public function confirmPayment(Request $request)
    {
        Transaction::create([
            'customer_id' => auth()->user()->id,
            'dealer_id' => $request->dealer_id,
            'motor_id' => $request->motor_id,
            'send_option_id' => $request->send_option_id,
            'payment_id' => $request->payment_id,
            'is_success' => '1',
            'total_payment' => $request->total_payment,
            'datetime' => now()->format('Y-m-d H:i:s')
        ]);

        $motor = Motor::find($request->motor_id);
        $motor['amount'] -= $request->amount;

        $motor->save();

        alert('Pembayaran sukses', 'Pembayaranmu telah sukses', 'success');

        return redirect()->route('customer.index');
    }

    public function history()
    {
        $transactions = Transaction::where('customer_id', auth()->user()->id)->get();
        return view('customer.history', compact('transactions'));
    }

    public function historyDetails(Transaction $transaction)
    {
        return view('customer.history-details', compact('transaction'));
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
