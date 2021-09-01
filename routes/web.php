<?php

use Illuminate\Support\Facades\Cookie;
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

Route::get('/' , 'WebsiteController@index');
Route::get('about' , 'WebsiteController@about');
Route::post('payment' , 'AuthController@payment');
Route::get('product-details/{slug}' , 'WebsiteController@productdetails');
Route::get('checkout/{slug}' , 'WebsiteController@checkout');
Route::get('myOrders' , 'WebsiteController@myOrders');
Route::get('confirmPaymentData' , 'AuthController@confirmPaymentData');
Route::get('all-projects' , 'WebsiteController@allProjects');
Route::get('contact' , 'WebsiteController@contact');
Route::get('services' , 'WebsiteController@allServices');
Route::get('/service-details/{slug}' , 'WebsiteController@serviceDetails');
Route::post('send-mail' , 'WebsiteController@sendMail');
Route::get('clients' , 'WebsiteController@client');
Route::get('logout' , 'AuthController@logout');
Route::post('verifyUser' , 'AuthController@verifyUsers');
Route::get('/login', function () {
    return view('website.login');
});
Route::get('shop', function () {
    return view('website.coming-soon');
});
if(Cookie::get('role') != null){
    Route::get('home' , 'SettingController@company_info');
    Route::post('insertCompanyInfo' , 'SettingController@insertCompanyInfo');
    Route::post('getCompanyInfoById' , 'SettingController@getCompanyInfoById');
    Route::get('mainSlide' , 'SettingController@mainSlide');
    Route::post('insertMainSlide' , 'SettingController@insertMainSlide');
    Route::post('getMainSlideById' , 'SettingController@getMainSlideById');
    Route::post('deleteSlideList' , 'SettingController@deleteSlideList');
    Route::get('servicesAdmin' , 'SettingController@servicesAdmin');
    Route::post('insertServices' , 'SettingController@insertServices');
    Route::post('getServicesById' , 'SettingController@getServicesById');
    Route::post('deleteServiceList' , 'SettingController@deleteServiceList');
    Route::get('category' , 'SettingController@category');
    Route::post('insertCategory' , 'SettingController@insertCategory');
    Route::post('getCategoryById' , 'SettingController@getCategoryById');
    Route::post('deleteCategoryList' , 'SettingController@deleteCategoryList');
    Route::get('subCategory' , 'SettingController@subCategory');
    Route::post('insertSubCategory' , 'SettingController@insertSubCategory');
    Route::get('getSubCatIdListAll' , 'SettingController@getSubCatIdListAll');
    Route::post('getSubCategoryById' , 'SettingController@getSubCategoryById');
    Route::post('deleteSubCategoryList' , 'SettingController@deleteSubCategoryList');
    Route::get('products' , 'SettingController@products');
    Route::post('insertProjects' , 'SettingController@insertProjects');
    Route::post('getProjectById' , 'SettingController@getProjectById');
    Route::post('deleteProjectList' , 'SettingController@deleteProjectList');
    Route::get('clientAdmin' , 'SettingController@clients');
    Route::post('insertClients' , 'SettingController@insertClients');
    Route::post('getClientsById' , 'SettingController@getClientsById');
    Route::post('deleteClientList' , 'SettingController@deleteClientList');
    Route::get('users' , 'SettingController@users');
    Route::post('insertUsers' , 'SettingController@insertUsers');
    Route::post('getUsersById' , 'SettingController@getUsersById');
    Route::post('deleteUserList' , 'SettingController@deleteUserList');
    Route::get('receivedEmail' , 'SettingController@receivedEmail');
}
