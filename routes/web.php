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

Route::get('/login', function () {

    return view('auth.login');
});
/*
 Facebook login
 */
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

/*
 * Admin login
 */
Route::prefix('admin')->group(function(){
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/','WelcomeController@index');

Route::get('/category', 'CategoryController@category');

Route::post('/addCategory', 'CategoryController@addCategory');

Route::get('/post', 'PostController@post');

Route::post('/addPost', 'PostController@addPost');

Route::get('/profile', 'ProfileController@profile');

Route::post('/addProfile', 'ProfileController@addProfile');

Route::get('/view/{id}', 'PostController@view');

Route::get('/edit/{id}', 'PostController@edit')->middleware('auth');

Route::post('/editPost/{id}', 'PostController@editPost')->middleware('auth');

Route::get('/delete/{id}','PostController@deletePost');

Route::get('/category/{id}','PostController@category');

Route::get('/like/{id}','PostController@like');

Route::get('/dislike/{id}','PostController@dislike');

Route::post('/comment/{id}', 'PostController@comment');

Route::post('/search', 'PostController@search');

Route::get('/user/like/{id}','WelcomeController@userlike');







