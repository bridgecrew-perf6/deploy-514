<?php

use App\Settings\SMPP;
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

Route::get('/', function () {

//    $tx = new SMPP('sms.acemountmedia.com',13000);
//    dump($tx->checkSeq());
//    $tx->sendSMS('Shop Zakaz', '380635661329', 'Msssasd');
//    php artisan smpp:transceiver
    return view('main');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
