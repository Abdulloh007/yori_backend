<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Task extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
          'title',
          'description',
          'address',
          'date_of_start',
          'deadline',
          'budget',
          'payment_type',
          'price',
          'views',
          'status',
          'category',
          'subcategory',
          'private_description',
          'provide_documents',
          'customer',
          'perfomer',
    ];

    protected $table="task";

    /**
    * The attributes that should be hidden for serialization.
    *
    * @var array<int, string>
    */
    protected $hidden = [];

    /**
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
    protected $casts = [];
}
