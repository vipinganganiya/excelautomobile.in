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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => 'order'], function () {
    Route::post('/payment_method', 'AdminOrderController@postEditPaymentMethod')->name('admin_order.payment_method');
    Route::post('/order_status', 'AdminOrderController@postEditOrderStatus')->name('admin_order.order_status');

    Route::post('/update_tax', 'AdminOrderController@postEditOrderTax')->name('admin_order.update_tax');
    Route::post('/update_tax_title', 'AdminOrderController@postEditOrderTaxTitle')->name('admin_order.update_tax_title');
});
