<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function(){
 
    Route::get('/', 'navController@home')->name('home');

    Route::get('/worldnews', 'navController@world')->name('world');
    
    Route::get('/sports', 'navController@sports')->name('sports');
    
    Route::get('/tech', 'navController@tech')->name('tech');
    
    Route::get('/business', 'navController@business')->name('business');
    
    Route::get('/media', 'navController@media')->name('media');
    
    Route::get('/entertainment', 'navController@entertainment')->name('entertainment');
    
    Route::get('/culture', 'navController@culture')->name('culture');
    
    Route::get('/books', 'navController@books')->name('books');
    
    Route::get('/articales', 'navController@articales')->name('articales');

    Route::get('/post/{ref}/{id}', 'navController@post')->name('post');

    Route::post('/message','navController@message')->name('message');

    Route::post('/search','navController@search')->name('search');
    
    Route::post('/staff', 'navController@logIn')->name('staff');
    
    Route::get('/contact',function(){
        return view('nav.contact');
    })->name('contact');

    Route::get('/login',function(){
        return view('nav.login');
    })->name('login');
    
                              //Auth//
    
    Route::group(['middleware' => 'auth'], function(){
        
        Route::get('/dashboard',function(){
            $stop = true;
            return view('nav.staff', compact('stop'));
        })->name('dashboard');
        
        Route::get('/add/post', function(){
            return view('nav.addPost');
        })->name('addPost');
        
        Route::get('/update/post', function(){
            return view('nav.update');
        })->name('postUpdate');
        
        
        Route::get('/delete/post', function(){
            return view('nav.delPost');
        })->name('delPost');
        
        Route::get('/add/users', function(){
            return view('nav.users');
        })->name('AddUsers');
        
                        //Auth navController//
        
        Route::get('/message/display', 'navController@messdis')->name('messDis');
        
        Route::get('/post/views', 'navController@postViews')->name('postView');
        
        Route::post('/add/user', 'navController@user')->name('user');
        
        Route::get('/logout', 'navController@logout')->name('logout');
        
        Route::post('/add', 'navController@add')->name('add');
        
        Route::post('/update', 'navController@update')->name('update');
        
        Route::post('/delete', 'navController@del')->name('del');
    });    
});
