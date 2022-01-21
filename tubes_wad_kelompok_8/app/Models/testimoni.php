<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    
    public function review() {
        return $this->belongsTo(review::class);
    }

    
    public function testimoni_gambar() {
        return $this->hasmany(testimoni_gambar::class);
    }
}
