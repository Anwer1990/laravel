<?php

Route::group(['module' => 'Produit', 'middleware' => ['web'], 'namespace' => 'App\Modules\Produit\Controllers'], function() {

    Route::resource('produit', 'ProduitController');

});
