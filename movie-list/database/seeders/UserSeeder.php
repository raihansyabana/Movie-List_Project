<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'dob' => Carbon::make('2001-05-12'),
            'phone' => '0813249284234',
            'image' => '',
            'role' => 'Admin'
        ]);

        User::create([
            'name' => 'USERNAME',
            'email' => 'username@gmail.com',
            'password' => Hash::make('username123'),
            'dob' => Carbon::make('2001-05-12'),
            'phone' => '0813249284234',
            'image' => '',
            'role' => 'User'
        ]);
    }
}