<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UsersController;
use App\Models\OrderItems;

Route::get('/', [WelcomeController::class,'welcome'])->name('welcome');
Route::get('/Myfirstlaravel', function () {
    return view('MyfirstView');
});

// Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index'); 
// Route::get('/orders/create', [OrdersController::class, 'create'])->name('orders.create'); 
// Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store'); 
// Route::get('/orders/{id}', [OrdersController::class, 'show'])->name('orders.show'); 
// Route::get('/orders/{id}/edit', [OrdersController::class, 'edit'])->name('orders.edit');
// Route::put('/orders/{id}', [OrdersController::class, 'update'])->name('orders.update'); 
// Route::delete('/orders/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy'); 

Route::resource('orders',OrdersController::class);
Route::resource('user',UsersController::class);
Route::resource('orderitems',OrdersController::class);
Route::resource('inventory',InventoryController::class);