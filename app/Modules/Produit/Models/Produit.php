<?php

namespace App\Modules\Produit\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model {

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }

}
