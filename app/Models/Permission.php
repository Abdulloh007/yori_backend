<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Permission extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'permission';

    protected $fillable = [
        'route',
        'get',
        'post',
        'delete',
    ];

    protected $hidden = [
    ];

    protected $casts = [];

}
