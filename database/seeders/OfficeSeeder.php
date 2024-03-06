<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Office::create([
            'name'=>'Nukus madeniyat bolimi',
            'district_id'=>1,
            'type_id'=>1,
        ]);
        Office::create([
            'name'=>'Xojeli madeniyat bolimi',
            'district_id'=>3,
            'type_id'=>1,
        ]);
        Office::create([
            'name'=>'1-sanli BMKOM',
            'district_id'=>1,
            'type_id'=>3,
        ]);
        Office::create([
            'name'=>'2-sanli BMKOM',
            'district_id'=>1,
            'type_id'=>3,
        ]);
        Office::create([
            'name'=>'3-sanli BMKOM',
            'district_id'=>2,
            'type_id'=>3,
        ]);
    }
}
