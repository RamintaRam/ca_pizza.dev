<?php

Route::group(['prefix' => 'pizza'], function ()
{
    Route::get('/', ['as' => 'app.pizza.list', 'uses' => 'CAPizzaController@index']);

    Route::get('/create', ['uses' => 'CAPizzaController@create']);
    Route::post('/create', ['as' => 'app.pizza.create', 'uses' => 'CAPizzaController@store']);

    Route::get('/{id}', ['uses' => 'CAPizzaController@show']);

    Route::get('/{id}/edit', ['uses' => 'CAPizzaController@edit']);
    Route::post('/{id}/edit', ['as' => 'app.pizza.update','uses' => 'CAPizzaController@update']);
});






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

Route::group(['prefix' => 'cheese'], function ()
{
    Route::get('/create', function ()
    {
        return view('cheese');
    });

    Route::post('/create', ['as' => 'app.cheese.create', 'uses' => 'CAPizzaCheeseController@create']);
});


Route::group(['prefix' => 'pad'], function ()
{
    Route::get('/create', function ()
    {
        return view('pad');
    });

    Route::post('/create', ['as' => 'app.pad.create', 'uses' => 'CAPizzaPadController@create']);
});


Route::group(['prefix' => 'ingredients'], function ()
{
    Route::get('/create', function ()
    {
        return view('ingredients');
    });

    Route::post('/create', ['as' => 'app.ingredients.create', 'uses' => 'CAPizzaIngredientsController@create']);
});






