<?php

use App\Http\Controllers\TestController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
    
    $url = Url::signedRoute('unsubscribe', ['user_id' => 25]);

    return view('welcome', ["url" => $url, "user_id" => 25]);
});

Route::get('unsubscribe/{user_id}', function () {

    return view('unsubscribe');
    
})->name('unsubscribe')->middleware('signed');
