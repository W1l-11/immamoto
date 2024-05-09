<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            [
                'name' => 'Bank BCA',
                'fee' => '0.2'
            ],
            [
                'name' => 'Bank BRI',
                'fee' => '0.5'
            ],
            [
                'name' => 'Bank BNI',
                'fee' => '0.5'
            ],
            [
                'name' => 'Bank Mandiri',
                'fee' => '0.4'
            ],
        ];

        foreach ($payments as $payment) {
            Payment::updateOrCreate(
                [
                    'name' => $payment['name'],
                    'fee' => $payment['fee'],
                ],
                $payment
            );
        }
    }
}