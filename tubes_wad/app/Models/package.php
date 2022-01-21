<?php

namespace App\Models;

use App\Models\gabung_package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class package extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function gabung_package() {
        return $this->belongsTo(gabung_package::class);
    }


    public function vendor() {
        return $this->belongsto(vendor::class);
    }
}
