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
        // création d'une nouvelle photo
        $photo = new PhotoPlat();
        // sélection d'un fichier jpg
        $photo->chemin = "img/plats/image-generique.jpg";
        // sauvgarde dans la BDD
        $photo->save();
    }
}
