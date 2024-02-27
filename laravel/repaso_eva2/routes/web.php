<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index');})->name('menu');

Route::get('product', 'ProductController@index')->name('product.index');
Route::get('product/id={product?}', 'ProductController@show')->name('product.show');
Route::get('product/create', 'ProductController@create')->name('product.create');
Route::post('product/{product?}', 'ProductController@store')->name('product.store');
Route::get('product/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('product/{product}', 'ProductController@update')->name('product.update');
Route::delete('product/{product}', 'ProductController@destroy')->name('product.destroy');

Route::get('employee', 'EmployeeController@index')->name('employee.index');
Route::get('employee/id={employee?}', 'EmployeeController@show')->name('employee.show');
Route::get('employee/create', 'EmployeeController@create')->name('employee.create');
Route::post('employee/{employee?}', 'EmployeeController@store')->name('employee.store');
Route::get('employee/{employee}/edit', 'EmployeeController@edit')->name('employee.edit');
Route::patch('employee/{employee}', 'EmployeeController@update')->name('employee.update');
Route::delete('employee/{employee}', 'EmployeeController@destroy')->name('employee.destroy');

Route::get('supplier/products', 'SupplierController@products')->name('supplier.products');

Route::get('order', 'OrderController@pide')->name('order.pide');
Route::get('order/pedido', 'OrderController@pedido')->name('order.pedido');

Route::resource('supplier', 'SupplierController');
Route::resource('contact', 'ContactController');

?>
