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
