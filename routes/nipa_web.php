<?php
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Auth::routes();

Route::group([
    'prefix' => 'user-role',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
    Route::get('/customer-index', 'CustomerController@index')->name('admin_customer_index');
    Route::get('/customer-view/{id}', 'CustomerController@view')->name('admin_customer_view');
    Route::get('/customer-create', 'CustomerController@create')->name('admin_customer_create');
    Route::get('/customer-search', 'CustomerController@search')->name('admin_customer_search');
    Route::get('/customer-import', 'CustomerController@import')->name('admin_customer_import');
    Route::post('/customer-store', 'CustomerController@store')->name('admin_customer_store');
    Route::get('/customer-edit', 'CustomerController@edit')->name('admin_customer_edit');
    Route::post('/customer-update', 'CustomerController@update')->name('admin_customer_update');
    Route::post('/customer-delete', 'CustomerController@delete')->name('admin_customer_delete');
});
Route::group([
    'prefix' => 'user-role',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
    Route::get('/profile-edit', 'ProfileController@edit')->name('admin_profile_edit'); 
    Route::get('/profile-change-email', 'ProfileController@change_email')->name('admin_profile_change_email'); 
    Route::get('/profile-change-password', 'ProfileController@change_password')->name('admin_profile_change_password'); 
    Route::get('/profile-additional-authentication', 'ProfileController@additional_authentication')->name('admin_profile_additional_authentication');

});
Route::group([
    'prefix' => 'user-role',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
    Route::get('/store-setup-profile', 'StoreSetupController@profile')->name('admin_store_setup_profile'); 
    Route::get('/store-setup-currencies', 'StoreSetupController@currencies')->name('admin_store_setup_currencies'); 
    Route::get('/store-setup-add-currencies', 'StoreSetupController@add_currencies')->name('admin_store_setup_add_currencies'); 
    Route::get('/store-setup-settings', 'StoreSetupController@settings')->name('admin_store_setup_settings'); 
    Route::get('/store-setup-change-password', 'StoreSetupController@change_password')->name('admin_store_setup_change_password'); 
    Route::get('/store-setup-additional-authentication', 'StoreSetupController@additional_authentication')->name('admin_store_setup_additional_authentication');

});