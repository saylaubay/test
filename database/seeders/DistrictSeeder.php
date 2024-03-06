<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        District::create([
            'name'=> 'No\'kis qalasi',
        ]);
        District::create([
            'name'=> 'No\'kis rayoni',
        ]);
        District::create([
            'name'=> 'Xo\'jeli rayoni',
        ]);
        District::create([
            'name'=> 'Taxiyatas rayoni',
        ]);
        District::create([
            'name'=> 'Kegeyli rayoni',
        ]);
        District::create([
            'name'=> 'Shimbay rayoni',
        ]);
        District::create([
            'name'=> 'Qarao\'zek rayoni',
        ]);
        District::create([
            'name'=> 'Taxtako\'pir rayoni',
        ]);

        District::create([
            'name'=> 'Qanliko\'l rayoni',
        ]);
        District::create([
            'name'=> 'Shomanay rayoni',
        ]);
        District::create([
            'name'=> 'Qon\'irat rayoni',
        ]);
        District::create([
            'name'=> 'Moynaq rayoni',
        ]);
        District::create([
            'name'=> 'Bozataw rayoni',
        ]);

        District::create([
            'name'=> 'To\'rtku\'l rayoni',
        ]);

        District::create([
            'name'=> 'Ellikqala rayoni',
        ]);
        District::create([
            'name'=> 'Beruniy rayoni',
        ]);

        District::create([
            'name'=> 'A\'miwda\'rya',
        ]);

    }
}
