<?php
Route::resource('/','IndexController', ['only'=>['index'], 'names'=>['index'=>'home']]);

Route::resource('/blog', 'Blog_contentController',['parametres'=>['blog_items' => 'alias'] ]); 
Route::get('/sp-{alias}', 'ArticleController'); 
Route::get('/blog/{alias}', 'Blog_contentController@showOnePost'); 
Route::get('/blog/tag/{tag}', 'Blog_contentController@showTaggedPosts'); 

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth']], function(){
	Route::resource('/articles', 'ArticlesController', ['as'=>'admin']);
	Route::resource('/cats', 'CategoriesController');
	Route::resource('/posts', 'Blog_contentController', ['as'=>'admin']);
	Route::resource('/tags', 'TagsController', ['as'=>'admin']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Clear Cache facade value:
Route::get('clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    return '<h1>config ,route, view, cache clear</h1>';
});
//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});



