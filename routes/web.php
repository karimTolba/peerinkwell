<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;


Route::get('/' , 'peerinkwell_show_pages@index');

Route::get('/development101/homepage_1' , 'peerinkwell_show_pages@homePage');

Route::get('/development101/homepage_2' , 'peerinkwell_show_pages@homePage_2');

Route::group(['middleware' => 'checkRoles'], function () { //make user logined only can access to these routes

    Route::get('/development101/homepage_3' , 'peerinkwell_show_pages@homePage_3')->name('homepage');

    Route::get('/development101/homepage_3/about' , 'peerinkwell_show_pages@About')->name('about');

    Route::get('/development101/homepage_3/blog' , 'peerinkwell_show_pages@blog')->name('blog');

    Route::get('/development101/homepage_3/contact' , 'peerinkwell_show_pages@contact')->name('contact');

    Route::get( '/development101/homepage_3/user_profile', 'peerinkwell_show_pages@user_profile')->name('user_profile');

    Route::get( '/development101/homepage_3/edit_user_profile', 'peerinkwell_show_pages@edit_user_profile')->name('edit_user_profile');

    Route::put('edit_password/{id}', 'peerinkwell_show_pages@edit_password')->name('edit_password');

    Route::put('edit_image/{id}', 'peerinkwell_show_pages@edit_image')->name('edit_image');

});


Route::get('/development101/homepage_3/sign_up' , 'peerinkwell_show_pages@sign_up_page')->name('sign_up');

Route::get('/development101/homepage_3/sign_in' , 'peerinkwell_show_pages@sign_in_page')->name('sign_in');

Route::get('/development101/logOut' , 'peerinkwell_show_pages@logOut')->name('logOut');

Route::post('/get_updates' , 'peerinkwell_show_pages@store_user_demande')->name('get_updates');

Route::post('/login_user' , 'peerinkwell_show_pages@Login')->name('user_login');

Route::resource('/user_information' , 'user_sign_up');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
