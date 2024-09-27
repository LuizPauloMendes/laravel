<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id' => '2',
            'name' => 'lp',
            'email' => 'lp@lp.com',
            'password' => Hash::make('lp'),
            'admin' == 0,
        ]);
    }
}