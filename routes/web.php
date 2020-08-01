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

Route::get('/','HomeController@home')->name('home');
Route::get('logout','Auth\LoginController@logout');

Route::get('item/{id}','ItemController@show')->name('item')->where('id','[0-9]+');
Auth::routes();

Route::group(['middleware'=>['web','auth']],function() {
    Route::get('MyPage',['uses'=>'MyPageController@show','as'=>'mypage']);
    Route::get('MyAuth',['uses'=>'MyAuthController@show','as'=>'MyAuth']);
    Route::get('add',['uses'=>'AddPostController@show','as'=>'add']);
    Route::post('add',['uses'=>'AddPostController@create','as'=>'add']);
    Route::post('up_logo',['uses'=>'AddPostController@up_logo','as'=>'up_logo']);
    Route::get('delete/{id}',['uses'=>'DeleteController@delete','as'=>'delete']);
    Route::get('edit/{id}',['uses'=>'EditController@show']);
    Route::post('edit',['uses'=>'EditController@edit','as'=>'edit']);
    Route::post('up',['uses'=>'AddPostController@up','as'=>'up']);
    Route::post('edit_file',['uses'=>'EditController@edit_file','as'=>'edit_file']);
    Route::post('edit_logo',['uses'=>'EditController@edit_logo','as'=>'edit_logo']);
    Route::post('img_delete',['uses'=>'EditController@img_delete','as'=>'img_delete']);
    Route::post('logo_delete',['uses'=>'EditController@logo_delete','as'=>'logo_delete']);
    Route::post('update_password',['uses'=>'PasswordController@update_password','as'=>'update_password']);
    Route::get('delete_profile/{id}',['uses'=>'ProfileDeleteController@profile_delete','as'=>'delete_profile']);
    Route::get('profile',['uses'=>'ProfileController@show','as'=>'profile']);
});

Route::post('search',['uses'=>'SearchController@show','as'=>'search']);
Route::get('hotels',['uses'=>'PagesController@hotels','as'=>'hotels']);
Route::get('restaurants',['uses'=>'PagesController@restaurants','as'=>'restaurants']);
Route::get('kindergartens',['uses'=>'PagesController@kindergartens','as'=>'kindergartens']);
Route::get('pools',['uses'=>'PagesController@pools','as'=>'pools']);
Route::get('sport-halls',['uses'=>'PagesController@sporthalls','as'=>'sport-halls']);
Route::get('banks',['uses'=>'PagesController@banks','as'=>'banks']);
Route::get('clubs',['uses'=>'PagesController@clubs','as'=>'clubs']);
Route::get('beauty-shop',['uses'=>'PagesController@beautyShop','as'=>'beauty-shop']);
Route::get('taxi',['uses'=>'PagesController@taxi','as'=>'taxi']);
Route::get('cafe',['uses'=>'PagesController@cafe','as'=>'cafe']);
Route::get('shop',['uses'=>'PagesController@shop','as'=>'shop']);
Route::get('bar',['uses'=>'PagesController@bar','as'=>'bar']);
Route::get('tourism',['uses'=>'PagesController@tourism','as'=>'tourism']);
Route::get('cinema',['uses'=>'PagesController@cinema','as'=>'cinema']);
Route::get('pharmacies',['uses'=>'PagesController@pharmacies','as'=>'pharmacies']);
Route::get('truckingindustry',['uses'=>'PagesController@truckingIndustry','as'=>'truckingindustry']);
Route::get('404',['uses'=>'ErrorController@show','as'=>'404']);

Route::group(['prefix'=>'admin','middleware'=>['admin']],function() {
    Route::get('/',['uses'=>'AdminController@show','as'=>'admin']);
});