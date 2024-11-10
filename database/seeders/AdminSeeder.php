<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->count(10)->create();

        // DB::table('admins')->insert([
        //     'full_name' => 'Ra Panha',
        //     'address' => '123 Seang Mean Chey, City, Country',
        //     'tel_phone' => '123-456-7890',
        //     'email' => 'rapanha@example.com',
        //     'password' => Hash::make('password'),
        //     'image' => 'https://i.pinimg.com/736x/b3/26/1b/b3261b3e2a33411a5800fb82c18e4ce2.jpg',
        //     'status' => 'active',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}