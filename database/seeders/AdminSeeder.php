<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'is_admin' => 1,
            'current_level' => 1,
            'max_level' => 44,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => bcrypt('test'),
            'is_admin' => 0,
            'current_level' => 1,
            'max_level' => 44,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Yopi',
            'email' => 'yopi@viatom.com',
            'password' => bcrypt('gold'),
            'is_admin' => 1,
            'current_level' => 1,
            'max_level' => 44,
        ]);


        // run factory user
        // \App\Models\User::factory(2000)->create();
    }
}
