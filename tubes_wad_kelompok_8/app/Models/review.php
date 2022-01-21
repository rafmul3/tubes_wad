<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id'
    ];
    
    public function gabung_package() {
        return $this->belongsTo(gabung_package::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function testimoni() {
        return $this->hasmany(testimoni::class);
    }
}
