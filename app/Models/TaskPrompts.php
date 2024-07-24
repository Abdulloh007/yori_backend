<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskPrompts extends Model
{
    use HasFactory;

    protected $fillable = [
        'prompt',
        'prompt_tj',
        'subcategory_id'
    ];


    public function subcategory() {
        return $this->belongsTo(Subcategories::class, 'subcategory_id');
    }
}
