<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\bukti;
use App\Models\review;
use App\Models\vendor;
use App\Models\package;
use App\Models\testimoni;
use App\Models\thumbnail;
use Illuminate\Http\Request;
use App\Models\gabung_package;
use App\Models\testimoni_gambar;

class homecontroller extends Controller
{
    public function package() {
        
        return view('home.package', [
            "head" => "",
            "packages" => gabung_package::where('ispackage', '1')->get(),
            "collabs" => package::all(),
        ]);
    }

    public function vendor() {
        
        return view('home.vendor', [
            "head" => "",
            "vendors" => vendor::all(),

        ]);
    }

    public function thumbnail(Request $thumbnail) {
        
        $validatedata = $thumbnail->validate([
            'vendor_id' => 'required',
            'image_thumbnail' => 'image'
        ]);

        if($thumbnail->file('image_thumbnail')) {
            $validatedata['image_thumbnail'] = $thumbnail->file('image_thumbnail')->store('vendor_thumbnail');
        }
                
        thumbnail::create($validatedata);

        return redirect('/profile');
    }

    public function thumbnail_hapus(Request $thumbnail) {
        
        
                
        thumbnail::destroy($thumbnail->id);

        return redirect('/profile');
    }

    

    public function bukti(Request $bukti) {
        
        $validatedata = $bukti->validate([
            'book_id' => 'required',
            'bukti' => 'image'
        ]);

        if($bukti->file('bukti')) {
            $validatedata['bukti'] = $bukti->file('bukti')->store('vendor_bukti');
        }
                $validatedata2 = [
                    'isbayar' => '1'
                ];
                
        book::where('id', $bukti->book_id)->update($validatedata2);
        bukti::create($validatedata);

        return redirect('/profile/review');
    }

    public function testimoni(Request $testimoni) {
        
        $validatedata = $testimoni->validate([
            'testimoni_id' => 'required',
            'gambar' => 'image'
        ]);

        if($testimoni->file('gambar')) {
            $validatedata['gambar'] = $testimoni->file('gambar')->store('testimoni');
        }
                
        testimoni_gambar::create($validatedata);

        return redirect('/admin/testimoni');
    }

    public function testimoni_hapus(Request $testimoni) {
        
                
        testimoni_gambar::destroy($testimoni->id);

        return redirect('/admin/testimoni');
    }

    public function testimoni_tampil() {
        
                return view('home.testimoni', [
                    'testimonis' => testimoni::all(),
                    'head' => 'testimoni'
                ]);

    }
}
