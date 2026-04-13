<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            // Format NPM: 55201 | 24 | 001 dst
            $npm = sprintf("55201%02d%03d", 24, $i); 
            // hasil: 5520124001, 5520124002, ... 5520124050

            DB::table('users')->insert([
                'npm' => $npm,
                'username' => 'user24',          // sama semua
                'first_name' => 'Dinar',        // sama semua
                'last_name' => 'Rizkita',         // sama semua
                'email' => 'user24@example.com', // sama semua
                'email_verified_at' => now(),
                'password' => 'password',        // plain text, sama semua
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
