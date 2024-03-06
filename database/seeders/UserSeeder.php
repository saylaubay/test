<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name'=>'Saylaubay',
            'last_name'=>'Bekmurzaev',
            'username'=>'sake',
            'tg_username'=>'nukuslab',
            'chat_id'=>'123456789',
            'office_id'=>1,
//            'email'=>'sake@gmail.com',
            'password'=>Hash::make('123'),
        ]);
        User::create([
            'first_name'=>'Bill',
            'last_name'=>'Gates',
            'username'=>'bill',
            'tg_username'=>'bill',
            'chat_id'=>'456789',
            'office_id'=>2,
//            'email'=>'bill@gmail.com',
            'password'=>Hash::make('456'),
        ]);
    }
}
