<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;

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
//Route::get('/', 'PagesController@home')->name("root_path");
//Route::name("root_path")->get('/', 'PagesController@home');

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/test-email', function()
{
    return new ContactMessageCreated('Pedy DOVENON', 'peddydovenon@gmail.com', 'Bienvenu');
});

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);


Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@create'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@store'
]);




