<?php

namespace App\Http\Controllers;

use App\Http\Requests\ticketRequest;
use App\Models\Ticket;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Pusher\Pusher;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function dashbord()
    {
        return view('tickets.dashbord');
    }    
    
    public function AjoutTicket()
    {
        return view('tickets.ajout_ticket');
    }
    public function ListeTicket()
    {
        $tickets =  Ticket::all();

        return view('tickets.list_ticket', [
            'tickets' => $tickets,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajoute_client');
    }
    public function store(Ticket $ticket ,ticketRequest $request)
    {
        Ticket::create([
            'directionService' => $request -> directionService,
            'description' => $request -> description,
            'batiment' => $request -> batiment,
            'numeroPort' => $request -> numeroPort,
            'solutionProposer' => $request -> solutionProposer,
        ]);

        Auth::user()->id;
        // $pusher();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        // $pusher = new Pusher(
        //     env('PUSHER_APP_KEY'),
        //     env('PUSHER_APP_SECRET'),
        //     env('PUSHER_APP_ID'),
        // );

        // $pusher->trigger('my-channel', 'my-event');
        return redirect()->back()->with('success', 'le ticket a bien été enregistrer');

    }

    /**
     * Store a newly created resource in storage.
     */
    

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
    public function editTicket($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.editTicket', [
            'ticket' => $ticket
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateTicket(ticketRequest $request, $id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->directionService = $request->input('directionService');
        $ticket->description = $request->input('description');
        $ticket->batiment = $request->input('batiment');
        $ticket->numeroPort = $request->input('numeroPort');
        $ticket->solutionProposer = $request->input('solutionProposer');
        
        $ticket->save();

        return redirect()->route('tickets.listTicket')->with('success', 'Modification réussit...');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function deconnection()
    {
        Auth()->logout();
        return redirect('/index');
    }
}
