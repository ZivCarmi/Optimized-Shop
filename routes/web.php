<?php

// Shop

use App\Http\Controllers\MainController;

Route::prefix('shop')->group(function () {
  Route::get('/', 'ShopController@categories');
  Route::get('clear-cart', 'ShopController@clearCart');
  Route::get('add-to-cart', 'ShopController@addToCart');
  Route::get('cart', 'ShopController@cart');
  Route::get('checkout', 'ShopController@checkout');
  Route::get('update-cart', 'ShopController@updateCart');
  Route::get('remove-item/{pid}', 'ShopController@removeItem');
  Route::get('{curl}', 'ShopController@products');
  Route::get('{curl}/{purl}', 'ShopController@item');
});

// User

Route::prefix('user')->group(function () {

  Route::middleware(['signedguard'])->group(function () {
    Route::get('login', 'UserController@getLogin');
    Route::post('login', 'UserController@postLogin');
    Route::get('signup', 'UserController@getSignup');
    Route::post('signup', 'UserController@postSignup');
  });

  Route::get('logout', 'UserController@logout');
});

// CMS

Route::prefix('cms')->group(function () {

  Route::middleware(['cmsguard'])->group(function () {
    Route::get('dashboard', 'CmsController@dashboard');
    Route::get('orders', 'CmsController@orders');
    Route::resource('menus', 'MenuController');
    Route::resource('contents', 'ContentController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductController');
  });
});

// Pages
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'PagesController@postContact');
Route::get('{url}', 'PagesController@content');
