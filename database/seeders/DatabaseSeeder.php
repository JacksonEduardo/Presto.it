<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        // SEED PER USER REVISOR 

        // User::create([
        //     'name' => 'revisor',
        //     'is_revisor' => 1,
        //     'email' => 'revisor@revisor.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12345678'),
        //     'remember_token' => Str::random(10),
        // ]);
    }
      
}
