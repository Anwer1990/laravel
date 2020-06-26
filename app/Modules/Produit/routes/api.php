<?php

Route::group(['module' => 'Produit', 'middleware' => ['api'], 'namespace' => 'App\Modules\Produit\Controllers'], function() {

    Route::resource('produitApi', 'ProduitController');

});
