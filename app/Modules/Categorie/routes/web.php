<?php

Route::group(['module' => 'Categorie', 'middleware' => ['web'], 'namespace' => 'App\Modules\Categorie\Controllers'], function() {

    Route::resource('categorie', 'CategorieController');

});
