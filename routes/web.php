<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
// Route::get('/about', [WebsiteController::class, 'about']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'WebsiteController@index')->name('website_index');

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'],
    'namespace' => 'Admin'
], function () {

    Route::get('/', 'AdminController@index')->name('admin_index');
    Route::post('/set-theme', 'AdminController@set_theme')->name('admin_set_theme');
});

// user management
Route::group([
    'prefix' => 'user',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Admin'
], function () {
    Route::get('/index', 'UserController@index')->name('admin_user_index');
    Route::get('/view/{id}', 'UserController@view')->name('admin_user_view');
    Route::get('/create', 'UserController@create')->name('admin_user_create');
    Route::post('/store', 'UserController@store')->name('admin_user_store');
    Route::get('/edit/{id}', 'UserController@edit')->name('admin_user_edit');
    Route::post('/update', 'UserController@update')->name('admin_user_update');
    Route::post('/delete', 'UserController@delete')->name('admin_user_delete');

    Route::post('/test', 'UserController@test')->name('admin_user_test');
});

// user role
Route::group([
    'prefix' => 'user-role',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Admin'
], function () {
    Route::get('/index', 'UserRoleController@index')->name('admin_user_role_index');
    Route::get('/view/{id}', 'UserRoleController@view')->name('admin_user_role_view');
    Route::get('/create', 'UserRoleController@create')->name('admin_user_role_create');
    Route::post('/store', 'UserRoleController@store')->name('admin_user_role_store');
    Route::get('/edit', 'UserRoleController@edit')->name('admin_user_role_edit');
    Route::post('/update', 'UserRoleController@update')->name('admin_user_role_update');
    Route::post('/delete', 'UserRoleController@delete')->name('admin_user_role_delete');
});

Route::group([
    'prefix' => 'file-manager',
    'middleware' => ['auth'],
    'namespace' => 'Admin'
], function () {

    Route::post('/store-file', 'FileManagerController@store_file')->name('admin_fm_store_file');
    Route::get('/get-files', 'FileManagerController@get_files')->name('admin_fm_get_files');
    Route::delete('/delete-file/{image}', 'FileManagerController@delete_file')->name('admin_fm_delete_file');
});

Route::group([
    'prefix' => 'admin/product',
    'middleware' => ['auth'],
    'namespace' => 'Admin\Product'
], function () {

    Route::get('/view', 'ProductController@view')->name('admin_product_view');
    Route::get('/create', 'ProductController@create')->name('admin_product_create');
    Route::get('/categories', 'ProductController@categories')->name('admin_product_categories');
    Route::get('/search', 'ProductController@search')->name('admin_product_search');
    Route::get('/option', 'ProductController@option')->name('admin_product_option');
    Route::get('/reviews', 'ProductController@reviews')->name('admin_product_reviews');
    Route::get('/brands', 'ProductController@brands')->name('admin_product_brands');
});

Route::group([
    'prefix' => 'blank',
    'middleware' => ['auth'],
    'namespace' => 'Admin'
], function () {

    // basic_page
    Route::get('/index', 'AdminController@blade_index')->name('admin_blade_index');
    Route::get('/create', 'AdminController@blade_create')->name('admin_blade_create');
    Route::get('/view', 'AdminController@blade_view')->name('admin_blade_view');
});

Route::get('/test', function (Request $request) {

    $options = array(
        'type' => array('kg'),
        'purity' => array('red','Green','Blue','purple'),
        'model' => array('Small','Medium','Large'),
    );

    // Create an array to store the permutations.
    $results = array();
    foreach ($options as $values) {
        // Loop over the available sets of options.
        if (count($results) == 0) {
            // If this is the first set, the values form our initial results.
            $results = $values;
        } else {
            // Otherwise append each of the values onto each of our existing results.
            $new_results = array();
            foreach ($results as $result) {
                foreach ($values as $value) {
                    $new_results[] = "$result $value";
                }
            }
            $results = $new_results;
        }
    }

    // Now output the results.
    foreach ($results as $result) {
        echo "$result<br />";
    }

    dd($request->all());
})->name('route name');
