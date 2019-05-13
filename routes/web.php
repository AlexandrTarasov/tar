<?php

Route::resource('/','IndexController', ['only'=>['index'], 'names'=>['index'=>'home']]);

Route::get('/sp-{alias}', 'ArticleController'); 
Route::resource('/blog', 'Blog_contentController',['parametres'=>['blog_items' => 'alias'] ]); 
Route::get('/blog/{alias}', 'Blog_contentController@showOnePost'); 

Auth::routes();

//Clear Cache facade value:
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    return '<h1>config and cache clear</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
