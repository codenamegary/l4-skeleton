<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/{platform?}/{version?}', function($platform = 'bootstrap', $version = null){
    return Redirect::route('l4layouts::demo',array('platform' => $platform, 'version' => $version));
});
