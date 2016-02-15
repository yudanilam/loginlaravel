<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

*/

/*route::get('/home', function(){
	return view('welcome');
});
*/

/*route::get('/namalo/{nama}', function($nama){
    return 'nama looo siapa'.$nama;
});
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    // redirect ke halaman login 
    Route::auth();
});
// url ini hanya bisa diakses oleh user yang sudah login
Route::group(['middleware' => ['web','auth']], function () {
    
    Route::get('/home', 'HomeController@index');
    Route::get('/',function(){
    	if (Auth::user()->admin == 1){
    		//untuk user login : admin
    		return view('admin_home');
    	} else {
    		// untuk user login : login biasa
    		return view('user_home');
    	}
    });
});

//url / admin hanya bisa diakases oleh user yang sudah llogin sebagai admin

Route::get('admin',['middleware' => ['web','auth','admin'],function(){
	return view('admin/admin_home');
}]);