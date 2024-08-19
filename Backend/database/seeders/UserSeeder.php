<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'john_doe',
            'phonenumber' => '123-456-7890',
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'johndoe@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'auth_token' => Str::random(60),
            'token_expiry' => now()->addDays(30),
            'remember_token' => Str::random(10),
            'role_id' => 1, // Admin role
        ]);
        User::create([
            'username' => 'Jood Hamd.',
            'phonenumber' => '123-481 5411',
            'firstname' => 'Jood',
            'lastname' => 'Hamdallah',
            'email' => 'joodh@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'auth_token' => Str::random(60),
            'token_expiry' => now()->addDays(30),
            'remember_token' => Str::random(10),
            'role_id' => 2, // Manager role
        ]);
        User::create([
            'username' => 'Tala Yass.',
            'phonenumber' => '123-895 7414',
            'firstname' => 'Tala',
            'lastname' => 'Yassen',
            'email' => 'talay@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'auth_token' => Str::random(60),
            'token_expiry' => now()->addDays(30),
            'remember_token' => Str::random(10),
            'role_id' => 3, // Customer role
        ]);

    }
}
