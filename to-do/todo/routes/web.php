<?php

use App\Models\Client;
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


Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {
    return view('welcome');
});

Route::post('client-page/{id}', function ($id) {
    $data = Client::find($id);
    return view('client-page', ['client' => $data]);
});

Route::get('client-page', function () {
    return view('client-page' , ['client' => '']);
});


// Route::post('/new-client-form/{id}', function ($id) {
//     return view('new-client-form-page');
// });
