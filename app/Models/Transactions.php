<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Transactions extends Model
{
    use HasFactory, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'payment_date',
        'enrollment_date',
        'payment_amount',
        'credit_amount',
        'withdrawal_status',
        'enrollment_status',
        'card_holder',
        'credit_account',
        'commission',
        'location',
        'commission',
        'brand',
        'bank',
        'description'
    ];

}
