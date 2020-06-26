<?php

Route::group(['module' => 'Categorie', 'middleware' => ['api'], 'namespace' => 'App\Modules\Categorie\Controllers'], function() {

    Route::resource('categorieApi', 'CategorieController');

});
