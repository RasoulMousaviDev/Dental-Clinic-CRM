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
            'name' => 'Rasoul Mousavi',
            'mobile' => '09102836220',
            'email' => 'rasoulmousavidev@gmail.com',
            'password' => '123456789',
            'role_id' => 1,
            'status' => true
        ])->roles()->attach([1]);
    }
}
