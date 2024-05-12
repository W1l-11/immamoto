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
        'datetime',
        'total_payment'
    ];

    public $timestamps = false;

    public function motor()
    {
        return $this->hasOne(Motor::class, 'id', 'motor_id');
    }

    public function customer()
    {
        return $this->hasOne(User::class, 'id', 'customer_id');
    }

    public function sendOption()
    {
        return $this->hasOne(SendOption::class, 'id', 'send_option_id');
    }

    public function dealer()
    {
        return $this->hasOne(User::class, 'id', 'dealer_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'id', 'payment_id');
    }
}
