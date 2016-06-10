<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    //echo "tesste";
	return response()->json(['nome'=>'felipe']);
});

Route::post('api/teste', function (Request $request) {
	echo $request->gender;

    //echo "tesste";
	//return response()->json(['nome'=>'felipe']);
});


Route::group(['prefix'=>'api'],function(){

	Route::group(['prefix'=>'persons'],function(){
		Route::get('', 				['as'=>'per.index', 'uses'=>'Api\PersonController@index']);
		Route::get('create',        ['as' => 'per.create', 'uses' => 'Api\PersonController@create']);
		Route::post('store',         ['as' => 'per.store', 'uses' => 'Api\PersonController@store']);
		Route::get('{id}/edit',      ['as' => 'per.edit',   'uses' => 'Api\PersonController@edit']);
		Route::get('{id}/destroy',   ['as' => 'per.destroy', 'uses' => 'Api\PersonController@destroy']);
		Route::put('update/{users}', ['as' => 'per.update', 'uses' => 'Api\PersonController@update']);
	});

});
