<?php

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

use App\Http\Controllers\FlyerController;
use Illuminate\Http\Resources\Json\Resource;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/sideNavSearch/{value}','FlyerController@sideNavSearch');
Route::post('/addToClipping','ShoppingListController@addToClipping');
Route::post('/shoppingList/calculate','ShoppingListController@calculateCost');
Route::get('/favourites-search','FavouriteController@search');

Route::post('/user/signup','AuthenticationController@create');

Route::post('/user/login','AuthenticationController@login');

Route::get('/user/logout','AuthenticationController@logout');


Route::get('/notifications/{user_id}', 'LocationController@get');

/**
 * Modified By Sundeep
 */

Route::get('/clients', 'ClientLoginSignupController@index');
Route::post('/clients','ClientLoginSignupController@store');
Route::post('/clientLogin', 'ClientLoginSignupController@login');
Route::get('/clientAdd', 'ClientLoginSignupController@add');
Route::get('/clientModify', 'ClientLoginSignupController@modify');
Route::get('/clientDelete', 'ClientLoginSignupController@delete');
Route::post('/addProduct', 'ClientProductActivitiesController@add');
Route::post('/modifyProduct', 'ClientProductActivitiesController@modify');
Route::post('/deleteProduct', 'ClientProductActivitiesController@delete');
Route::get('/clientsActivities', 'ClientProductActivitiesController@index');

/**
 * Modified By Sundeep
 */

Route::get('/contactUs','ContactUsController@index');
Route::post('/contactUsForm','ContactUsController@store');
Route::get('/contactUsForm','ContactUsController@contact');
Route::get('/faq','FaqController@index');

Route::resource('/flyer','FlyerController');
Route::resource('/home','HomeController');
Route::resource('/shoppingList','ShoppingListController');
Route::resource('/location','LocationController');
Route::resource('/favourites','FavouriteController');

Route::get('/flyers/favourites','FlyerController@store_favourites');

Route::get('/about_us','HomeController@show_about_us');
Route::get('/video','HomeController@show_video');
