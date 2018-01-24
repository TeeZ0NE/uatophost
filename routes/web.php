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

Route::get('/', 'IndexController@index')->name('main_page');
Route::prefix('hosters')->group(function(){
  Route::prefix('top-10')->group(function(){
    Route::get('/','LeftSideGetHosters@top')->name('top-10');
    Route::get('region/{region}','LeftSideGetHosters@top_by_region')
    ->name('top-by-region');
    Route::get('kind/{kind}','LeftSideGetHosters@top_by_kind')
    ->name('top-by-kind');
  });
  
  Route::get('{hoster_url_slug?}','InfoAboutHosterController@getMainInfoAboutHoster');

});
Route::get('promotions','PromotionController@getAllPromotions')->name('promotions');
Route::get('servers','ServersController@getHostersByKindsServers')->name('servers');
Route::prefix('tests')->group(function(){
  Route::get('fileUpload', function () {

    return view('tests.fileUpload');

  });

  Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'IndexController@fileUpload']);
});

