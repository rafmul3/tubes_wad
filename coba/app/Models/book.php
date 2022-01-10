<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class book extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    
    public function gabung_package() {
        return $this->belongsTo(gabung_package::class);
    }

    
    public function review() {
        return $this->hasmany(review::class);
    }
}

