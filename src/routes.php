<?php

use Illuminate\Support\Facades\Route;
// Back-End Views
Route::group(['prefix' => 'hub/hotel', 'middleware' => ['web', 'can:admin_access']], function(){
    //Catalog
    Route::resource('posts', Nowyouwerkn\WeHotel\Controllers\PostController::class);
});

// RSS Feed
Route::get('/rss-feed', [
    'uses' => 'Nowyouwerkn\WeHotel\Controllers\FrontController@rssFeed',
    'as' => 'rss.feed',
]);

/* 
 * FRONT VIEWS
 *
*/
Route::get('/rooms', [
	'uses' => 'Nowyouwerkn\WeHotel\Controllers\FrontController@index',
	'as' => 'wb-hotel.index',
]);

/* Search Functions */
Route::get('/busqueda-general', [
    'uses' => 'Nowyouwerkn\WeHotel\Controllers\SearchController@query',
    'as' => 'wb-hotel-search.query',
]);