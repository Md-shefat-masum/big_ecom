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
    'prefix' => 'admin',
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
    'prefix' => 'admin',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {

    Route::get('/store-setup-profile', 'StoreSetupController@profile')->name('admin_store_setup_profile');
    Route::get('/store-setup-currencies', 'StoreSetupController@currencies')->name('admin_store_setup_currencies');
    Route::get('/store-setup-add-currencies', 'StoreSetupController@add_currencies')->name('admin_store_setup_add_currencies');

    Route::get('/get-website-settings', 'StoreSetupController@get_website_settings')->name('admin_get_website_settings');
    Route::get('/store-setup-settings', 'StoreSetupController@settings')->name('admin_store_setup_settings');
    Route::post('/create-store-setup-settings-website', 'StoreSetupController@create_settings_website')->name('admin_store_setup_settings_create_website');
    Route::get('/update-store-setup-settings-website', 'StoreSetupController@update_settings_website')->name('admin_store_setup_settings_update_website');

    Route::get('/store-setup-settings-display', 'StoreSetupController@settings_display')->name('admin_store_setup_settings_display');
    Route::get('/get-store-setup-settings-display', 'StoreSetupController@get_settings_display')->name('get_admin_store_setup_settings_display');
    Route::post('/create-store-setup-settings-display', 'StoreSetupController@create_settings_display')->name('create_admin_store_setup_settings_display');

    Route::get('/store-setup-settings-date', 'StoreSetupController@store_settings_date')->name('admin_store_setup_settings_date');
    Route::get('/get-store-setup-settings-date', 'StoreSetupController@get_store_settings_date')->name('get_admin_store_setup_settings_date');
    Route::post('/create-store-setup-settings-date', 'StoreSetupController@create_store_settings_date')->name('create_admin_store_setup_settings_date');

    Route::get('/store-setup-settings-url', 'StoreSetupController@store_settings_url')->name('admin_store_setup_settings_url');
    Route::get('/get-store-setup-settings-url', 'StoreSetupController@get_store_settings_url')->name('get_admin_store_setup_settings_url');
    Route::post('/create-store-setup-settings-url', 'StoreSetupController@create_store_settings_url')->name('create_admin_store_setup_settings_url');

    Route::get('/store-setup-settings-security', 'StoreSetupController@store_settings_security')->name('admin_store_setup_settings_security');
    Route::get('/get-store-setup-settings-security', 'StoreSetupController@get_store_settings_security')->name('get_admin_store_setup_settings_security');
    Route::post('/create-store-setup-settings-security', 'StoreSetupController@create_store_settings_security')->name('create_admin_store_setup_settings_security');
    
    Route::get('/store-setup-settings-share', 'StoreSetupController@store_settings_share')->name('admin_store_setup_settings_share');
    Route::get('/get-store-setup-settings-share', 'StoreSetupController@get_store_settings_share')->name('get_admin_store_setup_settings_share');
    Route::post('/create-store-setup-settings-share', 'StoreSetupController@create_store_settings_share')->name('create_admin_store_setup_settings_share');

    Route::get('/store-setup-change-password', 'StoreSetupController@change_password')->name('admin_store_setup_change_password');
    Route::get('/store-setup-additional-authentication', 'StoreSetupController@additional_authentication')->name('admin_store_setup_additional_authentication');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
        Route::get('/product-tax-class', 'ProductTaxClassController@index')->name('product_tax_class');
        Route::get('/product-tax-class/add', 'ProductTaxClassController@add')->name('product_tax_class_add');
        Route::post('/product-tax-class/submit', 'ProductTaxClassController@insert')->name('product_tax_class_insert');
        Route::get('/product-tax-class-view/{id}', 'ProductTaxClassController@view')->name('product_tax_class_view');
        Route::get('/product-tax-class-delete/{id}', 'ProductTaxClassController@delete')->name('product_tax_class_delete');
        Route::get('/product-tax-class-edit/{id}', 'ProductTaxClassController@edit')->name('product_tax_class_edit');
        Route::post('/product-tax-class-update', 'ProductTaxClassController@update')->name('product_tax_class_update');

});
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
        Route::get('/product-discount-type', 'ProductDiscountTypeController@index')->name('product_discount_type');
        Route::get('/product-discount-type/add', 'ProductDiscountTypeController@add')->name('product_discount_type_add');
        Route::post('/product-discount-type/submit', 'ProductDiscountTypeController@insert')->name('product_discount_type_insert');
        Route::get('/product-discount-type-view/{id}', 'ProductDiscountTypeController@view')->name('product_discount_type_view');
        Route::get('/product-discount-type-delete/{id}', 'ProductDiscountTypeController@delete')->name('product_discount_type_delete');
        Route::get('/product-discount-type-edit/{id}', 'ProductDiscountTypeController@edit')->name('product_discount_type_edit');
        Route::post('/product-discount-type-update', 'ProductDiscountTypeController@update')->name('product_discount_type_update');

});
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
        Route::get('/product-object-type', 'ProductObjectTypeController@index')->name('product_object_type');
        Route::get('/product-object-type/add', 'ProductObjectTypeController@add')->name('product_object_type_add');
        Route::post('/product-object-type/submit', 'ProductObjectTypeController@insert')->name('product_object_type_insert');
        Route::get('/product-object-type-view/{id}', 'ProductObjectTypeController@view')->name('product_object_type_view');
        Route::get('/product-object-type-delete/{id}', 'ProductObjectTypeController@delete')->name('product_object_type_delete');
        Route::get('/product-object-type-edit/{id}', 'ProductObjectTypeController@edit')->name('product_object_type_edit');
        Route::post('/product-object-type-update', 'ProductObjectTypeController@update')->name('product_object_type_update');

});
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
    'namespace' => 'Nipa'
], function () {
        Route::get('/product-condition', 'ProductConditionController@index')->name('product_condition');
        Route::get('/product-condition/add', 'ProductConditionController@add')->name('product_condition_add');
        Route::post('/product-condition/submit', 'ProductConditionController@insert')->name('product_condition_insert');
        Route::get('/product-condition-view/{id}', 'ProductConditionController@view')->name('product_condition_view');
        Route::get('/product-condition-delete/{id}', 'ProductConditionController@delete')->name('product_condition_delete');
        Route::get('/product-condition-edit/{id}', 'ProductConditionController@edit')->name('product_condition_edit');
        Route::post('/product-condition-update', 'ProductConditionController@update')->name('product_condition_update');

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
