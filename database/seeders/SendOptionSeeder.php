<?php

namespace Database\Seeders;

use App\Models\SendOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SendOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sendOptions = [
            [
                'name' => 'Kurmisend',
                'cost' => '20000'
            ],
            [
                'name' => 'SendoRush',
                'cost' => '40000'
            ],
        ];

        foreach ($sendOptions as $sendOption) {
            SendOption::updateOrCreate(
                [
                    'name' => $sendOption['name'],
                    'cost' => $sendOption['cost'],
                ],
                $sendOption
            );
        }
    }
}