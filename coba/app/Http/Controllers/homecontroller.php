<?php

namespace App\Http\Controllers;

use App\Models\gabung_package;
use App\Models\vendor;
use App\Models\package;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function package() {
        
        return view('home.package', [
            "head" => "",
            "packages" => gabung_package::all(),
        ]);
    }

    public function vendor() {
        
        return view('home.vendor', [
            "head" => "",
            "vendors" => vendor::all(),

        ]);
    }
}
