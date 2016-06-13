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
		Route::get('', 				 ['as'=>'per.index', 'uses'=>'Api\PersonController@index']);
		Route::get('create',         ['as' => 'per.create', 'uses' => 'Api\PersonController@create']);
		Route::post('',         	 ['as' => 'per.store', 'uses' => 'Api\PersonController@store']);
		Route::get('{id}/edit',      ['as' => 'per.edit',   'uses' => 'Api\PersonController@edit']);
		Route::get('{id}/destroy',   ['as' => 'per.destroy', 'uses' => 'Api\PersonController@destroy']);
		Route::put('update/{users}', ['as' => 'per.update', 'uses' => 'Api\PersonController@update']);
	});

	Route::group(['prefix'=>'doctors'],function(){
		Route::get('', 				 ['as'=>'doc.index', 'uses'=>'Api\DoctorController@index']);
		Route::get('create',         ['as' => 'doc.create', 'uses' => 'Api\DoctorController@create']);
		Route::post('',         	 ['as' => 'doc.store', 'uses' => 'Api\DoctorController@store']);
		Route::get('{id}/edit',      ['as' => 'doc.edit',   'uses' => 'Api\DoctorController@edit']);
		Route::get('{id}/destroy',   ['as' => 'doc.destroy', 'uses' => 'Api\DoctorController@destroy']);
		Route::put('update/{users}', ['as' => 'doc.update', 'uses' => 'Api\DoctorController@update']);

		Route::group(['prefix'=>'addSpec'], function(){
			Route::get('{id}', 	 	 ['as' => 'doc.spec', 'uses' =>'Api\DoctorController@showSpec']);
			Route::post('', 	 	 ['as' => 'doc.addSpec', 'uses' =>'Api\DoctorController@addSpec']);
		});	
	});

	Route::group(['prefix'=>'health-centers'],function(){
		Route::get('', 				 ['as'=>'hc.index', 'uses'=>'Api\HealthCenterController@index']);
		Route::get('create',         ['as' => 'hc.create', 'uses' => 'Api\HealthCenterController@create']);
		Route::post('',         	 ['as' => 'hc.store', 'uses' => 'Api\HealthCenterController@store']);
		Route::get('{id}/edit',      ['as' => 'hc.edit',   'uses' => 'Api\HealthCenterController@edit']);
		Route::get('{id}/destroy',   ['as' => 'hc.destroy', 'uses' => 'Api\HealthCenterController@destroy']);
		Route::put('update/{users}', ['as' => 'hc.update', 'uses' => 'Api\HealthCenterController@update']);

		Route::group(['prefix'=>'addDoctor'], function(){
			Route::get('{id}', 	 	 ['as' => 'hc.Doc', 'uses' =>'Api\HealthCenterController@showDoctor']);
			Route::post('', 	 	 ['as' => 'hc.addDoc', 'uses' =>'Api\HealthCenterController@addDoctor']);
		});		
	});

	Route::group(['prefix'=>'specialty'],function(){
		Route::get('', 				 ['as'=>'spec.index', 'uses'=>'Api\SpecialtyController@index']);
		Route::get('create',         ['as' => 'spec.create', 'uses' => 'Api\SpecialtyController@create']);
		Route::post('',         	 ['as' => 'spec.store', 'uses' => 'Api\SpecialtyController@store']);
		Route::get('{id}/edit',      ['as' => 'spec.edit',   'uses' => 'Api\SpecialtyController@edit']);
		Route::get('{id}/destroy',   ['as' => 'spec.destroy', 'uses' => 'Api\SpecialtyController@destroy']);
		Route::put('update/{users}', ['as' => 'spec.update', 'uses' => 'Api\SpecialtyController@update']);
	});

	Route::group(['prefix'=>'attendance'],function(){
		Route::get('', 				 ['as'=>'att.index', 'uses'=>'Api\AttendanceController@index']);
		Route::get('create',         ['as' => 'att.create', 'uses' => 'Api\AttendanceController@create']);
		Route::post('',         	 ['as' => 'att.store', 'uses' => 'Api\AttendanceController@store']);
		Route::get('{id}/edit',      ['as' => 'att.edit',   'uses' => 'Api\AttendanceController@edit']);
		Route::get('{id}/destroy',   ['as' => 'att.destroy', 'uses' => 'Api\AttendanceController@destroy']);
		Route::put('update/{users}', ['as' => 'att.update', 'uses' => 'Api\AttendanceController@update']);
	});

});
