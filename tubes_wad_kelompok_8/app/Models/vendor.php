<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function package() {
        return $this->hasMany(package::class);
    }

    public function User() {
        return $this->belongsto(User::class);
    }

    public function thumbnail() {
        return $this->hasmany(thumbnail::class);
    }
}
