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

Route::get('/', function () {
    return view('welcome')->with('title','Login');
});
Route::post('/','LoginController@verify');

Route::get('/home','HomeController@index');

Route::post('/home/buyTicket','BoughtTicketContorller@insert')->name('ticket.buy');
Route::post('/home/sellTicket','SoldTicketContorller@insert')->name('ticket.sell');

Route::get('/checkticket','SoldTicketContorller@getTicket');

Route::get('/soldtickets','SoldTicketContorller@soldTicket');




