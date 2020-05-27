<?php

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/categories','CategoriesController');

Route::resource('/posts','PostsController');
Route::get('/trashed','PostsController@trashed')->name('trashed.index');
Route::get('/restore/{id}','PostsController@restore')->name('trashed.restore');

Route::resource('/tags','TagsController');

// Comments Routes
Route::get('/comments/','CommentsController@index')->name('comments.index');
Route::post('/posts/{post}','CommentsController@store')->name('comments.store');

Route::get('/comments/{comment}','CommentsController@approve')->name('comments.approve');
Route::post('/comments/{comment}','CommentsController@approve')->name('comments.approve');

Route::post('/comments/','CommentsController@approveAll')->name('comments.approveAll');

Route::post('/comments/{comment}','CommentsController@delete')->name('comments.delete');


// Contact Routes
Route::get('/contact_us','ContactController@contactPage')->name('contacts.contactPage');
Route::post('/contact_us','ContactController@store')->name('contacts.store');
Route::get('/contact/{contact}','ContactController@show')->name('contacts.show');
Route::get('/contact/','ContactController@index')->name('contacts.index');
Route::get('/contact/reply/{contact}','ContactController@reply')->name('contacts.reply');
Route::get('/contact/delete/{contact}','ContactController@delete')->name('contacts.delete');

// Newsletter Routes
Route::get('/newsletter/','NewsletterController@index')->name('newsletters.index');
Route::post('/newsletter','NewsletterController@store')->name('newsletters.store');
Route::get('/newsletter/{newsletter}','NewsletterController@delete')->name('newsletters.delete');

//Users Routes

Route::middleware(['auth','admin'])->group(function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
	Route::get('/dashboard/settings','DashboardController@edit')->name('dashboard.settings');
		Route::get('/dashboard/footer','FooterController@index')->name('dashboard.footer');
	Route::post('/dashboard/settings','DashboardController@store')->name('dashboard.store');

	Route::get('/users','UsersController@index')->name('users.index');
	Route::get('/users/create','UsersController@create')->name('users.create');
	Route::get('/users/{user}/makeAdmin','UsersController@makeAdmin')->name('users.makeAdmin');
});

Route::middleware(['auth'])->group(function(){
	Route::get('/users/{user}/profile','UsersController@edit')->name('users.edit');
	Route::post('/users/{user}/profile','UsersController@update')->name('users.update');
});



//FrontEnd Routes

Route::get('/','FrontendController@index')->name('frontend');
Route::get('/live_search/action', 'PostsController@action')->name('live_search.action');
