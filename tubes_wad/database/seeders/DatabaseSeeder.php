<?php

namespace Database\Seeders;

use App\Models\coba;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        coba::create([
            'name' => 'presiden'
        ]);
        coba::create([
            'name' => 'joko'
        ]);
        coba::create([
            'name' => 'wi'
        ]);
        coba::create([
            'name' => 'dodo'
        ]);
       
    }
    
    
}
