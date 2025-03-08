<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'phone',
        'email',
        'active',
        'moderated',
        'user_id',
        'city_id',
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
