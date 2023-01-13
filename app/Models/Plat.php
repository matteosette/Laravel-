<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\PhotoPlat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    protected  $table = 'plat';
    protected $primaryKey = 'id'; 

    /**
     * cette fonction permet de récupérer la categorie
     *
     * @return Categorie
     */
    public function Categorie()
    {
        return $this->BelongsTo(Categorie::classe);
    }

    /**
     * cette fonction permet de récupérer la photo
     *
     * @return PhotoPlat
     */
    public function photo()
    {
        return $this->hasOne(PhotoPlat::classe);
    }

}
