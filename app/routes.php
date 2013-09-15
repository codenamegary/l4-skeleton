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

Route::get('/{platform?}/{version?}', array(
    'as' => 'version demo',
    function($platform = 'bootstrap', $version = null)
    {
        $settingsKey = 'l4layouts::settings.'.$platform;
        if(Config::get($settingsKey.'.active', false) === false) return Response::make('It appears that the platform ' . $platform . ' has not been implemented yet.');
        if($version !== null and array_search($version, Config::get($settingsKey.'.versions',array())) === false) return Response::make('It appears that version ' . $version . ' has not been implemented yet.');
        if($version === null) $version = Config::get($settingsKey.'.active','2.3.2');
        Config::set($settingsKey.'.active', $version);
        return View::make('hello')->with('platform', $platform);
    }
));
