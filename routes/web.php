<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
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
    return view('Auth.index');
});
Route::get('/index', [LoginController::class, 'index'])->name('Auth.index');
Route::post('/index', [LoginController::class, 'store'])->name('Auth.store');

Route::get('/inscription', [AuthController::class, 'inscription'])->name('Auth.inscription');
Route::post('/inscription', [AuthController::class, 'store'])->name('Auth.inscription');
Route::get('/dashbord', [TicketController::class, 'dashbord'])->name('tickets.dashbord');
Route::get('/deconnection', [TicketController::class, 'deconnection'])->name('deconnection');
Route::get('/ajoutTicket', [TicketController::class, 'AjoutTicket'])->name('tickets.ajoutTicket');
Route::post('/ajoutTicket', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/ListeTicket', [TicketController::class, 'ListeTicket'])->name('tickets.listTicket');
Route::get('/ListeTicket/{id}/edit', [TicketController::class, 'editTicket'])->name('tickets.editTicket');
Route::put('/ListeTicket/{id}/update', [TicketController::class, 'updateTicket'])->name('tickets.updateTicket');


Route::get('/ajout_client', [ClientController::class, 'ajouteClient'])->name('ajouteClient');
Route::post('/ajout_client', [ClientController::class, 'store'])->name('ajouteClient');
Route::get('/liste_client', [ClientController::class, 'listeClient'])->name('listeClient');
Route::get('/liste_Client/{id}/edit', [ClientController::class, 'edit'])->name('EditlisteClient');
Route::put('/liste_Client/{id}/update', [ClientController::class, 'update'])->name('UpdatelisteClient');
Route::delete('/liste_Client/{id}/delete', [ClientController::class, 'delete'])->name('DeletelisteClient');
