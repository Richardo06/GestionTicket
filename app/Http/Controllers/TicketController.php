<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tickets.index');
    }
    public function dashbord()
    {
        return view('tickets.dashbord');
    }

    public function ajouteClient()
    {
        return view('ajout_client');
    }
    
    public function AjoutTicket()
    {
        return view('tickets.ajout_ticket');
    }
    public function ListeTicket()
    {
        return view('tickets.list_ticket');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajoute_client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validateFormRequest $request) 
    {
        // dd($request);
        $verif = $request;
        if ($verif) {
            return view('tickets.dashbord');
        }else {
            echo ('$error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
