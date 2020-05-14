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

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PageController@home'

]);

Route::get('/test-email', function(){
    return new ContactMessageCreated('Dilo le boss', 'dhermanna@gmail.com', 'Message envoyé avec succès!');
});

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PageController@about'

]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@create'

]);
Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@store'

]);