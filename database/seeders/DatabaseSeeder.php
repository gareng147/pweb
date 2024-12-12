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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sayuran Organik',
            'category' => 'Sayuran',
            'price' => 10000,
            'description' => 'Sayuran segar dari kebun kami.',
            'stock' => 50,
            'image' => 'sayuran.jpg',
        ]);
    }
}
