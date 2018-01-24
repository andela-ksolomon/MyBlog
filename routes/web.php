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

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'index'
]);

Route::get('post/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'blog.post'
]);
Route::get('post/{id}/like', [
    'uses' => 'PostController@getLikePost',
    'as' => 'blog.post.like'
]);
Route::get('articles', [
    'uses' => 'PostController@getIndex',
    'as' => 'event.index'
]);

Route::get('gallery', function () {
    return view('gallery.index');
})->name('gallery.index');

Route::get('contact-us', function () {
    return view('other.contact');
})->name('other.contact');

/* Grouping the admin routes */
Route::group(['prefix' => 'admin'], function() {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);
    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);
    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);
    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit'
    ]);
    Route::get('delete/{id}', [
        'uses' => 'PostController@getAdminDelete',
        'as' => 'admin.delete'
    ]);
    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
