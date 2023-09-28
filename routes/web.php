<?php

use App\Http\Controllers\ClientController;
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
Route::post('/index', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/dashbord', [TicketController::class, 'dashbord'])->name('tickets.dashbord');
Route::get('/ajoutTicket', [TicketController::class, 'AjoutTicket'])->name('tickets.ajoutTicket');
Route::get('/ListeTicket', [TicketController::class, 'ListeTicket'])->name('tickets.listTicket');
Route::get('/ajout_client', [TicketController::class, 'ajouteClient'])->name('ajouteClient');
Route::post('/ajout_client', [ClientController::class, 'store'])->name('ajouteClient');
Route::get('/liste_client', [ClientController::class, 'listeClient'])->name('listeClient');
Route::get('/liste_Client/{id}/edit', [ClientController::class, 'edit'])->name('EditlisteClient');
Route::put('/liste_Client/{id}/update', [ClientController::class, 'update'])->name('UpdatelisteClient');
Route::delete('/liste_Client/{id}/delete', [ClientController::class, 'delete'])->name('DeletelisteClient');
