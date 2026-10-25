<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'demo_user',
                'full_name' => 'Demo User',
                'email' => 'demo@example.com',
            ],
        ]);
    }
}