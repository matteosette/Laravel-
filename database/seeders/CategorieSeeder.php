<?php

namespace Database\Seeders;

use Faker;
use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        $categorieDatas = ["entrée", "plat", "dessert", "petit déjeuner",
        "boissons"];

        foreach ($categorieDatas as $categorieData){
        // création d'une nouvelle catégorie
        $categorie = new Categorie();
        // affectation d'un nom 
        $categorie->nom = "entrée";
        // affecatation d'une description 
        $categorie->description = $faker->words(8, true);
        // sauvegarde dans la BDD
        $categorie->save();
        }
    }
}
