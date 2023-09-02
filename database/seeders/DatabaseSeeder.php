<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat user secara manual
        User::create([
            'name' => 'Iqbal',
            'username' => 'iqbal',
            'email' => 'iqbal@gmail.com',
            'phone_number' => '081234567890',
            'password' => bcrypt('password'),
        ]);
        
        // Memanggil factory user
        User::factory(4)->create();

        // Membuat category secara manual
        Category::create([
            'name' => 'Infrastruktur',
            'slug' => 'infrastruktur',
        ]);
        Category::create([
            'name' => 'Lingkungan',
            'slug' => 'lingkungan',
        ]);
        Category::create([
            'name' => 'Layanan Publik',
            'slug' => 'layanan-publik',
        ]);
        Category::create([
            'name' => 'Keamanan',
            'slug' => 'keamanan',
        ]);
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan',
        ]);

        
    }
}
