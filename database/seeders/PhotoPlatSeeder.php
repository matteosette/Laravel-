<?php

namespace Database\Seeders;

use App\Models\Photoplat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Photoplatseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photoDatas = [ 
            "img/plats/anh-nguyen-kcA-c3f_3FE-unsplash.jpg",
            "img/plats/chad-montano--GFCYhoRe48-unsplash.jpg",
         ];

         foreach ($photoDatas as $photoData) {
            // création d'une nouvelle photo
            $photo = new PhotoPlat();
            // sélection d'un fichier jpg
            $photo->chemin = $photoData;
            // sauvgarde dans la BDD
            $photo->save();
        }
    }
}