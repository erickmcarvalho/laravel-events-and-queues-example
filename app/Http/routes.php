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

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/broadcasting', function() {
    return view('broadcasting');
});

Route::get('/send-message', function() {
    return view('sendMessage');
});

Route::post('/send-message', function() {
    event(new \App\Events\ShowMessage(request()->input('message'), request()->input('type')));

    return redirect()->back()->with('ok', true);
});

Route::get('/teste', function() {
    dispatch(new \App\Jobs\TesteJob());
});