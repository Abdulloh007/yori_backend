<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class UserBearer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = "users";
    protected $fillable = [
        'name',
        'surname',
        'avatar',
        'age',
        'city',
        'rating',
        'bio',
        'video_about',
        'status',
        'role',
        'balance',
        'email',
        'date_of_birth',
        'phone_number',
        'password',
        'tarif',
        'sex',
        'bearer',
  ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'bearer',
        'password',
        'phone_number',
        'balance',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];
}
