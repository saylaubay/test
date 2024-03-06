<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name'=>'RMMB',
        ]);
        Type::create([
            'name'=>'RK',
        ]);
        Type::create([
            'name'=>'BILIMLENDIRIW',
        ]);
    }
}
