<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class UserBearer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

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
        'city_id',
        'rating',
        'bio',
        'video_about',
        'status',
        'role',
        'balance',
        'freeze_balance',
        'email',
        'date_of_birth',
        'phone_number',
        'password',
        'sex',
        'push_noty',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'phone_number',
        'balance',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public function subcategories() {
        return $this->belongsToMany(Subcategories::class, 'user_subs', 'user_id', 'subcategory_id');
    }

    public function city() {
        return $this->belongsTo(City::class);
    }
}
