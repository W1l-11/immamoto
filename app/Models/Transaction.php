<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'dealer_id',
        'motor_id',
        'send_option_id',
        'is_success',
        'payment_id',
        'datetime'
    ];

    public $timestamps = false;
}
