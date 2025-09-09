<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        \App\Models\User::factory()->create([
            'name' => 'Admin Sekolah',
            'email' => 'admin@sekolah.local',
            'password' => bcrypt('123'),
            'role' => 'admin',
        ]);

        // Create sample data
        \App\Models\News::factory(15)->create();
        \App\Models\Extracurricular::factory(10)->create();
        \App\Models\Gallery::factory(20)->create();
        \App\Models\Facility::factory(8)->create();
        \App\Models\Ppdb::factory(25)->create();
        \App\Models\Feedback::factory(10)->create();
    }
}
