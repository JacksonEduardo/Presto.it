<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
    * Seed the application's database.
    */
    public function run(): void
    {
        $categories = [
            ["Motori"],
            ["Informatica"],
            ["Console e videogiochi"],
            ["Fotografia"],
            ["Telefonia"],
            ["Elettrodomestici"],
            ["Abbigliamento e accessori"],
            ["Musica e Film"],
            ["Sports"],
            ["Giardino e Fai da te"],
        ];

        foreach ($categories as $category){
            DB::table('categories')->insert([
                "type" => $category[0]
            ]);
        }
        }
    }
