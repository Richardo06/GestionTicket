<?php

use App\Http\Controllers\TicketController;
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
    return view('tickets.index');
});
Route::get('/index', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/dashbord', [TicketController::class, 'dashbord'])->name('tickets.dashbord');
Route::get('/ajout_client', [TicketController::class, 'ajouteClient'])->name('tickets.ajouteClient');
Route::get('/liste_client', [TicketController::class, 'listeClient'])->name('tickets.listeClient');