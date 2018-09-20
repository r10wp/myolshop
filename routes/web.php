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
//     return view('welcome');
// });

Auth::routes();

//Front End
Route::get('/', 'IndexController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{url}','ProductsController@products');
Route::get('/product/{id}','ProductsController@product');

//Backend Admin
Route::get('/admin', 'AdminController@login');
Route::match(['get','post'],'/admin', 'AdminController@login');
Route::get('/logout', 'AdminController@logout');



Route::group(['middleware'=>['auth']], function(){
  Route::get('/admin/dashboard', 'AdminController@dashboard');
  Route::get('/admin/settings', 'AdminController@settings');
  Route::get('/admin/check-pwd', 'AdminController@chkPassword');
  Route::match(['get','post'] , '/admin/update-pwd', 'AdminController@updatePassword');

  //Category and Sub Category
  Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
  Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
  Route::get('/admin/delete-category/{id}','CategoryController@deleteCategory');
  Route::get('/admin/view-categories', 'CategoryController@viewCategories');

  //Produks
  Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
  Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
  Route::get('/admin/delete-product/{id}' , 'ProductsController@deleteProduct');
  Route::get('/admin/delete-product-image/{id}' , 'ProductsController@deleteProductImage');
  Route::get('/admin/view-products', 'ProductsController@viewProducts');

  //Atributes Produk
  Route::match(['get','post'],'/admin/add-attribute/{id}','ProductsController@addAttribute');
  Route::get('/admin/delete-attribute/{id}' , 'ProductsController@deleteAttribute');
});
