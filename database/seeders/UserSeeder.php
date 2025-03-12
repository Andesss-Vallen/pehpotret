<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'rinajhe54@gmail.com',        
            'password' => '12345678'
        ]);
        $admin->assignRole('admin');

        $superuser = User::create([
            'name' => 'superuser',
            'email' => 'raehanandes@gmail.com',        
            'password' => '12345678'
        ]);
        $superuser->assignRole('superuser');
    }
}
