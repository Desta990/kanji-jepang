<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KanjiSeeder::class, // Menambahkan KanjiSeeder ke dalam DatabaseSeeder
        ]);
        $this->call([
            UsersTableSeeder::class,
        ]);
    }
}
