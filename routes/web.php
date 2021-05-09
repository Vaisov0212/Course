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


Route::get('/','SiteController@index')->name('home');
Route::get('/about-us','SiteController@about')->name('about_us');
Route::get('/news','SiteController@news')->name('news');
Route::get('news/{id}','SiteController@newsMore')->name('news-more');
Route::get('/tests','SiteController@tests')->name('freeTests');
Route::post('/tests-more','SiteController@testsShow')->name('test-show');
Route::post('tests-ansver','SiteController@ansver')->name('ansver');
Route::get('/contact-us','SiteController@contact')->name('contact');
Route::post('/contact','SiteController@contact_us')->name('contact_us');
Route::post('/search','SiteController@search')->name('searchPost');

Route::namespace('Admin')->name('admin.')->prefix('Admin713')->group(function(){
     Route::get('/', function() {
        return redirect()->route('admin.posts.index');
    })->name('dashboard');
Route::resource('feedback','FeedbackController');
Route::resource('posts', 'PostsController');
Route::resource('free-tests','FreeTestsController');

});
