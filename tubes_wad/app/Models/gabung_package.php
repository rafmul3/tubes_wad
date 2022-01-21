<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gabung_package extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function package() {
        return $this->hasMany(package::class);
    }

    public function book() {
        return $this->hasMany(book::class);
    }
    public function review() {
        return $this->hasMany(review::class);
    }

    
    public function user() {
        return $this->belongsTo(user::class);
    }
}
