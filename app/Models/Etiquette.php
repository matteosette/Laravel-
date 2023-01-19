<?php

namespace App\Models;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquette extends Model
{
    use HasFactory;

    protected  $table = 'etiquette';
    protected $primaryKey = 'id'; 

    /**
     * Undocumented function
     *
     * @return collection
     */
    public function plats()
    {
        $this->belongsToMany(Plat::class);
    }
}
