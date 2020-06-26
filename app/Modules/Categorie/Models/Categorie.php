<?php

namespace App\Modules\Categorie\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

    public function produits()
    {
        return $this->hasMany('App\Models\Produit');
    }

}
