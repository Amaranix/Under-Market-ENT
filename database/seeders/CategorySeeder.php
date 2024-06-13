<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id' => "1",
            'name' => "Conception",
            'image' => "kategori-desain.png",
            'description' => "Produits numériques conçus pour répondre aux besoins de créativité et de conception des utilisateurs.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "2",
            'name' => "Film",
            'image' => "kategori-film.png",
            'description' => "Productions audiovisuelles conçues pour être projetées dans les cinémas, les chaînes de télévision ou les plateformes de streaming en ligne.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "3",
            'name' => "Musique",
            'image' => "kategori-musik.png",
            'description' => "Production audio couvrant divers types de musique tels que la pop, le rock, le jazz, le classique, le hip-hop et divers autres genres musicaux.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "4",
            'name' => "Éducation",
            'image' => "kategori-pendidikan.png",
            'description' => "Produits ou services conçus pour faciliter l'apprentissage, tels que des livres, des cours en ligne, etc.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "5",
            'name' => "Software Development",
            'image' => "kategori-software.png",
            'description' => "Produits et services conçus pour faciliter le développement de logiciels.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'id' => "6",
            'name' => "Écrits et publications",
            'image' => "kategori-tulisan.png",
            'description' => "Produits ou services axés sur l'écriture et la publication d'œuvres écrites, tant sous forme numérique que physique.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}