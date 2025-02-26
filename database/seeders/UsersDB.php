<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersDB extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@kattechpc.vn',
            'password' => Hash::make('123456789As'),
            'role' => Role::ADMIN,
            'title' => Role::ADMIN,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
