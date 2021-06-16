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
    Route::get('/admin-profile-edit/{id}', 'ProfileController@edit')->name('admin_profile_edit');
    Route::post('/admin-profile-update', 'ProfileController@update_profile')->name('admin_profile_update');
    Route::get('/profile-change-email/{id}', 'ProfileController@change_email')->name('admin_profile_change_email');
    Route::post('/profile-change-email', 'ProfileController@update_email')->name('admin_profile_update_email');
    Route::get('/profile-change-password/{id}', 'ProfileController@change_password')->name('admin_profile_change_password');
    Route::post('/profile-change-password', 'ProfileController@update_password')->name('admin_profile_update_password');
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
    Route::post('/create-store-setup-settings-website', 'StoreSetupController@create_settings_website')->name('admin_store_setup_settings_create_website');

    Route::get('/store-setup-settings-display', 'StoreSetupController@settings_display')->name('admin_store_setup_settings_display');
    Route::get('/store-setup-change-password', 'StoreSetupController@change_password')->name('admin_store_setup_change_password');
    Route::get('/store-setup-additional-authentication', 'StoreSetupController@additional_authentication')->name('admin_store_setup_additional_authentication');
});
Route::group([
    'prefix' => 'user-role',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
    Route::get('/account-settings-invoices', 'AccountSettingsController@invoices')->name('admin_account_settings_invoices');
    Route::get('/account-settings-payment-method', 'AccountSettingsController@payment_method')->name('admin_account_settings_payment_method');
});
Route::group([
    'prefix' => 'user-role',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
    Route::get('/admin-storefront-logo', 'StorefrontController@logo')->name('admin_storefront_logo');
    Route::get('/admin-storefront-social-media', 'StorefrontController@social_media')->name('admin_storefront_social_media');
    Route::get('/admin-storefront-web-pages', 'StorefrontController@web_pages')->name('admin_storefront_web_pages');
    Route::get('/admin-storefront-create-web-pages', 'StorefrontController@create_web_pages')->name('admin_storefront_create_web_pages');
});
Route::group([
    'prefix' => 'user-role',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
    Route::get('/admin-email', 'StorefrontController@email')->name('admin_email');
});
