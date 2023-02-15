<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;

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

Route::get('/', function () {
    return view('welcome');
});

// save address
Route::get('insert', function () {
    $user = User::findOrFail(1);
    $address = new Address(['name' => 'Mohammadpur']);
    $user->address()->save($address);
    return $address . 'saved';
});

// update address

Route::get('update', function () {
    // $address = Address::where('user_id', 1);
    $address = Address::whereUserId(1)->first();
    $address->name = "Updated Location &****& Point";
    $address->save();
});


// read user

Route::get('read/{id}', function ($id) {
    // $address = Address::where('user_id', 1);
    $user = User::findOrFail($id);
    return $user->name;
});
