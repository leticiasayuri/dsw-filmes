<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 
    [
        'uses' => 'FilmeController@index'
    ]
);

Route::get('/delete/filme/{id}', 
    [
        'uses' => 'FilmeController@delete',
        'as' => 'delete.filme'
    ]
);

Route::get('/detail/filme/{id}', 
    [
        'uses' => 'FilmeController@detail',
        'as' => 'detail.filme'
    ]
);

Route::get('/update/filme/{id}', 
    [
        'uses' => 'FilmeController@update',
        'as' => 'update.filme'
    ]
);

Route::get('/create/filme', 
	[
        'uses' => 'FilmeController@create',
        'as' => 'create.filme'
	]
);