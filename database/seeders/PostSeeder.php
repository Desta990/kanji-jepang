<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'judul' => 'Judul Pertama',
            'ringkasan' => 'Ringkasan dari posting pertama.',
            'konten' => 'Konten lengkap dari posting pertama yang memberikan detail lebih lanjut.',
            'url_gambar' => 'https://example.com/gambar1.jpg',
        ]);

        Post::create([
            'judul' => 'Judul Kedua',
            'ringkasan' => 'Ringkasan dari posting kedua.',
            'konten' => 'Konten lengkap dari posting kedua dengan informasi yang lebih dalam.',
            'url_gambar' => 'https://example.com/gambar2.jpg',
        ]);

        Post::create([
            'judul' => 'Judul Ketiga',
            'ringkasan' => 'Ringkasan dari posting ketiga.',
            'konten' => 'Konten lengkap dari posting ketiga yang menjelaskan topik yang berbeda.',
            'url_gambar' => 'https://example.com/gambar3.jpg',
        ]);

        Post::create([
            'judul' => 'Judul Keempat',
            'ringkasan' => 'Ringkasan dari posting keempat.',
            'konten' => 'Konten lengkap dari posting keempat yang membahas berbagai hal terkait topik.',
            'url_gambar' => 'https://example.com/gambar4.jpg',
        ]);

        Post::create([
            'judul' => 'Judul Kelima',
            'ringkasan' => 'Ringkasan dari posting kelima.',
            'konten' => 'Konten lengkap dari posting kelima yang memberi wawasan baru.',
            'url_gambar' => 'https://example.com/gambar5.jpg',
        ]);

        Post::create([
            'judul' => 'Judul Keenam',
            'ringkasan' => 'Ringkasan dari posting keenam.',
            'konten' => 'Konten lengkap dari posting keenam yang menyajikan informasi menarik.',
            'url_gambar' => 'https://example.com/gambar6.jpg',
        ]);
    }
}


