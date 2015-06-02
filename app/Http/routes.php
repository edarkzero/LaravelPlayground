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
use \App\User;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

//Indicates that {id} will be always a natural number
$router->pattern('id', '[0-9]+');

Route::get('route/{id}/{name}', function($id, $name)
{
    return print_r(array('id' => $id,'name' => $name),true);
})
    ->where(['name' => '[a-z]+']);

Route::bind('user', function($value)
{
    return User::where('name', $value)->first();
});

Route::get('profile/{user}', ['as'=> 'profile',function(App\User $user)
{
    return $user;
}]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
