<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filePathName=base_path().'\names\cities.txt';
       
        $fileName = fopen($filePathName, "r");
        
        
        $x=0;
        while (($line = fgets($fileName)) !== false) 
        {
       
            City::create([ 'name' => $line ]);
            $x++;
         }
    }
}
