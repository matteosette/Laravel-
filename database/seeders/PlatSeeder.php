<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\PhotoPlat;
use App\Models\Plat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Platseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // toute les catégories
        // categorie::all() c'est l'équivalent d'un SQL 'SELECT * FROM categorie'
        $categories = Categorie::all();
        // la première catégorie (entrée)
        $categorieEntree = $categories->first();
        // la deuxiéme catégorie (id 2 plat)
        $categoriePlat = Categorie::find(2);
        // la troisième catégorie (id 3 dessert)
        $categorieDessert = Categorie::find(3);

        // toute les photos
        $photos = PhotoPlat::all();
        // la première photo
        $photo =$photos->first();

        $platDatas =[
            [
                'nom' => 'Foo',
                'description' => 'Lorem ipsum color sit amet consectetur 
                adipisicing elit.',
                'prix' => 23.14,
                'epingle' => false,
                'photo_plat_id' => $photo->id,
                'categorie_id' => $categorieEntree->id, 
            ],

            [
                'nom' => 'bar',
                'description' => 'Lorem ipsum dolor sit amet consectetur 
                adipisicing elit.',
                'prix' => 42.31,
                'epingle' => true,
                'photo_plat_id' => $photo->id,
                'categorie_id' => $categoriePlat->id, 
            ],

            [
                'nom' => 'baz',
                'description' => 'Lorem ipsum dolor hit amet consectetur 
                adipisicing elit.',
                'prix' => 12.15,
                'epingle' => true,
                'photo_plat_id' => $photo->id,
                'categorie_id' => $ategorieDessert->id, 
            ],
         ];

        foreach ($platDatas as $platData) {
            $plat = new Plat();
            $plat->nom = $platData['nom'];
            $plat->description = $platData['description'];
            $plat->prix = $platData['prix'];
            $plat->epingle = $platData['epingle'];
            $plat->photo_plat_id = $platData['photo_plat_id'];
            $plat->categorie_id = $platData['categorie_id'];
            $plat->save();
        }
    }
}
