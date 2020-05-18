<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});




Route::group(['frontend'], function(){

    Route::get('/index', function(){

        return view('front.home');
    
    });

    Route::get('/about', function(){

        return view('front.about');

    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Route::namespace('Admin')->prefix('admin')->group(function(){

// Route::resource('/users', 'UsersController', ['except' => ['show', 'store', 'create']]);



// });

// Route::resource('admin/users', 'AdminUsersController', ['names'=>[

//     'index'=>'admin.users.index',
//     'create'=>'admin.users.create',
//     'store'=>'admin.users.store',
//     'edit'=>'admin.users.edit'


// ]]);



Route::group(['middleware'=>'admin'], function(){

Route::get('dashboard', 'AdminDashboardController@index');


Route::resource('admin/users', 'AdminUsersController', ['names' =>[
    'index'=>'admin.users.index',
    'create'=>'admin.users.create',
    'edit'=>'admin.users.edit',
    'store'=>'admin.users.store',
    'delete'=>'admin.users.destroy',
    // 'delete'=>'admin.users.delete',
    
]]);


Route::resource('admin/posts', 'AdminPostsController', ['names'=>[
    'index'=>'admin.posts.index',
    'create'=>'admin.posts.create',
    'edit'=>'admin.posts.edit',
    'update'=>'admin.posts.update',
    'delete'=>'admin.posts.delete',
]]);

Route::resource('/admin/categories', 'AdminCategoriesController', ['name'=>[
    'index'=>'admin.categories.index',
    'create'=>'admin.categories.create',
    'edit'=>'admin.categories.edit',
    'delete'=>'admin.categories.delete',
]]);

    

});