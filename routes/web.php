<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| frontend start
|
*/
// Route::get('/about', [WebsiteController::class, 'about']);


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '', 'namespace' => "Livewire"], function () {
    Route::get('/', "Home");
    Route::get('/contact', "Contact");
    Route::get('/cart', "Cart");
    // Route::get('/login', "Login");
    // Route::get('/register', "Register");
});


Route::prefix('')->namespace('Controllers')->group(function () {
    // Route::get('/', 'WebsiteController@index')->name('website_index');

    Route::get('/category/{slug}/{id}/products', 'WebsiteController@category_products')->name('website_category_products');

    Route::get('/get-category-product/{category_id}/{chunk_size}/{chunk_no}/json', 'JsonController@get_category_product')->name('get_category_product_json');
    Route::post('/search-product/json', 'JsonController@search_product')->name('search_product_json');

    Route::get('/get-auth-info',function(){
        return Auth::user();
    })->name('route name');

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
        Route::get('/delivery-man', 'UserController@admin_delivery_man_index')->name('admin_delivery_man_index');

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

        Route::get('/list', 'ProductController@list')->name('admin_product_list');
        Route::get('/list-campeing', 'ProductController@list_campeing')->name('admin_product_list_campeing');

        Route::get('/list/json', 'ProductController@list_json')->name('admin_product_list_json');
        Route::get('/list-campeing/json', 'ProductController@list_campeing_json')->name('admin_product_list_campeing_json');

        Route::get('/create', 'ProductController@create')->name('admin_product_create');
        Route::get('/create-campeing', 'ProductController@create_campain')->name('admin_product_create_campain');
        Route::get('/edit-campeing/{id}', 'ProductController@edit_campeing')->name('admin_product_edit_campeing');
        Route::get('/edit/{id}', 'ProductController@edit')->name('admin_product_edit');
        Route::get('/get-json/{id}', 'ProductController@get_json')->name('admin_product_get_json');
        Route::get('/get-campeing-json/{id}', 'ProductController@get_campeing_json')->name('admin_product_get_campeing_json');

        Route::post('/store-product', 'ProductController@store_product')->name('admin_product_store_product');
        Route::post('/update-product', 'ProductController@update_product')->name('admin_product_update_product');

        Route::post('/store-campeing', 'ProductController@store_campeing')->name('admin_product_store_campeing');
        Route::post('/update-campeing', 'ProductController@update_campeing')->name('admin_product_update_campeing');
        Route::post('/delete-campeing', 'ProductController@delete_campeing')->name('admin_product_delete_campeing');


        Route::get('/categories', 'ProductController@categories')->name('admin_product_categories');

        Route::get('/categories_tree_json', 'ProductController@categories_tree_json')->name('admin_product_categories_tree_json');
        Route::get('/create-category', 'ProductController@create_category')->name('admin_product_create_category');
        Route::get('/edit-category/{id}/{category_name}', 'ProductController@edit_category')->name('admin_product_edit_category');
        Route::get('/edit-data/{id}', 'ProductController@category_data')->name('admin_product_category_data');
        Route::post('/categorie-url-check', 'ProductController@categorie_url_check')->name('admin_product_categorie_url_check');
        Route::post('/store-category', 'ProductController@store_category')->name('admin_product_store_category');
        Route::post('/store-category-from-product-create', 'ProductController@store_category_from_product_create')->name('admin_product_store_category_from_product_create');
        Route::post('/update-category', 'ProductController@update_category')->name('admin_product_update_category');
        Route::post('/rearenge-category', 'ProductController@rearenge_category')->name('admin_product_rearenge_category');

        Route::get('/option', 'ProductController@option')->name('admin_product_option');
        Route::get('/option_json', 'ProductController@option_json')->name('admin_product_option_json');
        Route::get('/create-option', 'ProductController@create_option')->name('admin_product_create_option');
        Route::get('/edit-option/{id}', 'ProductController@edit_option')->name('admin_product_edit_option');
        Route::get('/get-option/{id}', 'ProductController@get_option')->name('admin_product_get_option');
        Route::post('/store-option', 'ProductController@store_option')->name('admin_product_store_option');
        Route::post('/update-option', 'ProductController@update_option')->name('admin_product_update_option');
        Route::post('/check_option_exists', 'ProductController@check_option_exists')->name('admin_check_option_exists');
        Route::get('/delete_option/{id}', 'ProductController@delete_option')->name('admin_delete_option');

        Route::get('/brands-json', 'ProductController@brands_json')->name('admin_product_brands_json');
        Route::get('/brands', 'ProductController@brands')->name('admin_product_brands');
        Route::get('/create-brands', 'ProductController@create_brands')->name('admin_product_create_brands');
        Route::get('/edit-brands/{id}', 'ProductController@edit_brands')->name('admin_product_edit_brands');
        Route::post('/store-brands', 'ProductController@store_brands')->name('admin_product_store_brands');
        Route::post('/update-brands', 'ProductController@update_brands')->name('admin_product_update_brands');

        Route::get('/search', 'ProductController@search')->name('admin_product_search');
        Route::get('/reviews', 'ProductController@reviews')->name('admin_product_reviews');
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
            echo "$result<br/>";
        }

        dd($request->all());
    })->name('route name');

});

