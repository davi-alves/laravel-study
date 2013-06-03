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

Route::get('/', function()
{
    return View::make('hello');
});

Route::group(array('before' => 'logged'), function ()
{
    Route::get('login', array('as' => 'login', function()
    {
        return View::make('login');
    }));

    Route::post('login', array('before' => 'csrf', function ()
    {
        $credentials = array(
            'username' => Input::get('username'),
            'password' =>Input::get('password'),
        );
        if(Auth::attempt($credentials)){
            return Redirect::intended('dashboard');
        }

        return Redirect::to('login')->withErrors(array('login' => 'Usuário ou Senha inválidos'));
    }));
});

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function ()
{
    Route::get('logout', function ()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return Redirect::to('login');
    });

    Route::resource('posts', 'PostsController');

    Route::get('dashboard', array('as' => 'dashboard', 'before' => 'auth', function ()
    {
        var_dump(Auth::user());
    }));
});
