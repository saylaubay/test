<?php

namespace Database\Seeders;

use App\Models\Input;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Input::create([
            'name'=>'EDO',
        ]);
        Input::create([
            'name'=>'EXAT',
        ]);
        Input::create([
            'name'=>'Pochta',
        ]);
        Input::create([
            'name'=>'Portal',
        ]);
        Input::create([
            'name'=>'Joqari ken\'es mu\'rajat',
        ]);
    }
}
