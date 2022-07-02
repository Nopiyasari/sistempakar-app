<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Sipta',
            'level' => 'admin',
            'email' => 'adminsipta@gmail.com',
            'password' => bcrypt('54321'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Nopiya Sari',
            'level' => 'user',
            'email' => 'nopiya@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}
