<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected  $table = 'categorie';
    protected $primaryKey = 'id'; 

    /**
     * Cette fonction permet de récupérer les plats
     *
     * @return Plat
     */
    public function plats()
    {
        return $this->hasMany(plat::class);
    }

    /**
     * Cette fonction permet de récupérer les plats dans l'ordre alphabétique des nom 
     *
     * @return Plat
     */
    public function platsSortedByNom()
    {
        return $this->hasMany(plat::class)
            // on peut inverser le tri en mettant 'desc' au lieu de 'asc'
            ->orderBy('nom', 'asc')
        ;
    }

     /**
     * Cette fonction permet de récupérer les plats dans l'ordre ascendant des prix 
     *
     * @return Plat
     */
    public function platsSortedByPrix()
    {
        return $this->hasMany(plat::class)
          // on peut inverser le tri en mettant 'desc' au lieu de 'asc'
            ->orderBy('prix', 'asc')
        ;
    }
}

