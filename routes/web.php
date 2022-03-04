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


Route::get('/', 'Frontend\indexController@index')->middleware('auth');


Route::get('/ckfinder.html', function () {
    return view('frontend.ckfinder');
    
})->middleware('auth');



// Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
//     ->name('ckfinder_connector');

// Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
//     ->name('ckfinder_browser');


Route::get('/add-property-filter', function () {
    return view('filter.add-property');
})->name('add-property-filter');

Route::post('filter-search-client', 'Frontend\filterController@filter')->name('client-search');

Route::get('/cache-clear', function () {
     \Artisan::call('cache:clear');
      \Artisan::call('config:clear');
     echo "thanh cong";

})->middleware('auth');

Route::get('searchquery', 'productController@search')->name('test');


Route::get('tim', 'productController@FindbyNameOrModelOfFrontend')->name('search-product-frontend');

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index');

Route::post('add-cart', 'AjaxController@addProductToCart')->name('cart');

Route::post('order-product', 'Frontend\orderController@orderProduct')->name('order');

Route::post('remove-cart', 'AjaxController@removeProductCart')->name('removeCart');

Route::post('show-cart', 'AjaxController@showProductCart')->name('showCart');

Route::post('add-cart-number', 'AjaxController@addProductToCartByNumber')->name('addCartNumber');

Route::get('/category/{slug}', 'Frontend\categoryController@index')->name('category-product')->middleware('auth');

Route::get('/{slug}', 'Frontend\categoryController@details')->name('details')->middleware('auth');

Route::group(['prefix' => 'admins','middleware' => 'auth'], function() {

    Route::get('home', 'HomeController@index')->name('home-admin');

    Route::get('order', 'Frontend\orderController@orderList')->name('order_list');

    Route::get('/order-list/{id}', 'Frontend\orderController@orderListView')->name('order_list_view');

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(    
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

    Route::resource('metaSeos', 'metaSeoController');

    Route::resource('menus', 'menuController');

    Route::resource('posts', 'postController');

    Route::resource('banners', 'bannerController');

    Route::resource('categories', 'categoryController');

    Route::resource('groupProducts', 'groupProductController');

    Route::resource('makers', 'makerController');

    Route::resource('products', 'productController');

    Route::resource('images', 'imageController');

    Route::post('find-product', 'productController@FindbyNameOrModel')->name('find-product');

    Route::get('category/{category_id}', 'productController@selectProductByCategory')->name('select-category');

    Route::resource('filters', 'filterController');


    Route::get('/filter', 'Frontend\filterController@index')->name('filter-property');

    //ajax

    Route::post('add-selected-value-filter', 'AjaxController@addValueSelectFilter')->name('add-value-selected-filter');

    Route::post('filter-price-product', 'AjaxController@filterByValue')->name('filter-option');


    Route::post('add-hot-product', 'AjaxController@addHotProduct')->name('add-hot-product');

    Route::post('remove-hot-product', 'AjaxController@removeHotProduct')->name('remove-hot-product');

    Route::post('add-sale-product', 'AjaxController@addSaleProduct')->name('add-sale-product');

    Route::post('remove-sale-product', 'AjaxController@removeSaleProduct')->name('remove-sale-product');

    Route::post('check-active', 'AjaxController@checkActive')->name('check-active');

     Route::post('add-active-confirm-product', 'AjaxController@addConfirm')->name('add-active-confirm');

     Route::resource('properties', 'propertyController');



});







