<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Response extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table="response";

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
          'price',
          'description',
          'task',
          'user',
    ];

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