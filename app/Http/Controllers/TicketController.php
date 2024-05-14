<?php

namespace App\Http\Controllers;

use App\Http\Requests\ticketRequest;
use App\Models\Ticket;
use App\Models\client;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Pusher\Pusher;
use Illuminate\Support\Facades\DB;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function dashbord()
    {
        $nombreTickets = Ticket::count();
        $nombreClients = client::count();
        $nombreUsers = User::count();

        $lastFiveTickets = Ticket::orderBy('created_at', 'desc')->take(5)->get();

        $nombreTicketsTermines = Ticket::where('etat', 'Terminé')->count();
        $nombreTicketsEnCours = Ticket::where('etat', 'En cours')->count();

            // Collecter les données sur le nombre de tickets créés chaque mois
    $monthlyTicketCounts = Ticket::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
    ->groupBy(DB::raw('MONTH(created_at)'))
    ->get();

// Créer des tableaux pour stocker les mois et les nombres de tickets
    $months = [];
    $ticketCounts = [];

// Parcourir les données et les stocker dans les tableaux
    foreach ($monthlyTicketCounts as $monthlyTicketCount) {
        $months[] = \DateTime::createFromFormat('!m', $monthlyTicketCount->month)->format('F');
        $ticketCounts[] = $monthlyTicketCount->count;
    }


        return view('tickets.dashbord', compact('nombreTickets', 'nombreClients', 'nombreUsers', 'lastFiveTickets', 'nombreTicketsTermines', 'nombreTicketsEnCours', 'months', 'ticketCounts'));
    } 

    public function usersettings()
    {
        return view('usersettings');
    }
    
    public function useredit()
    {
        return view('useredit');
    }   

    public function userupdate(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('usersettings')->with('success', 'Informations mises à jour avec succès.');
    }

    
    public function AjoutTicket()
    {
        return view('tickets.ajout_ticket');
    }
    public function ListeTicket()
    {
        $tickets = Ticket::orderByDesc('created_at')->get();
    
        return view('tickets.list_ticket', [
            'tickets' => $tickets,
        ]);
    }
    public function ticketsParMois()
    {
        $ticketsParMois = Ticket::selectRaw("DATE_FORMAT(created_at, '%M') as mois, count(*) as total")
            ->groupBy('mois')
            ->orderByRaw('MONTH(created_at)')
            ->get();
    
        return view('dashbord', compact('ticketsParMois'));
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
            'added_by' => Auth::user()->name,
        ]);

        session()->put('new_ticket_added', true);

        return redirect()->route('tickets.listTicket')->with('success', 'le ticket a bien été enregistrer...');



        Auth::user()->id;
        // $pusher();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
        );

        $pusher->trigger('my-channel', 'my-event');

    }

    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function consult_ticket($id)
    {
        $ticket = Ticket::findOrFail($id);

        // Vérifier si le ticket est dans l'état "Nouveau"
        if ($ticket->etat === 'Nouveau') {
            $ticket->etat = 'En cours';
            // $ticket->consulted_by = Auth::id();
            $ticket->consulted_by = Auth::user()->name;
            $ticket->save();
        }

        return view('tickets.consult_ticket', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editTicket($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.editTicket', [
            'ticket' => $ticket
        ]);
        
    }
    public function consult($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->etat='en cours';
        $ticket->save();
        return redirect('tickets/'.$id.'/consult_ticket');
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
    // public function traiter_ticket($id)
    // {
    //     $ticket = Ticket::findOrFail($id);
    //     return view('route('tickets.traiter_ticket', compact()));
    // }
    public function traiter_ticket($id)
{
    $ticket = Ticket::findOrFail($id);

    // Vérifiez si le ticket est dans l'état "En cours"
    if ($ticket->etat === 'En cours') {
        // Effectuez les actions de traitement du ticket ici
        // Par exemple, mettez à jour d'autres attributs du ticket ou effectuez des actions spécifiques

        // Par exemple, vous pouvez définir l'état du ticket comme "Terminé"
        $ticket->etat = 'Terminé';
        $ticket->save();
    }

    return view('tickets.traiter_ticket', compact('ticket'));
}
public function delete(string $id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->delete();

        return redirect()->route('tickets.listTicket')->with('success', 'Suppression réussit...');

    }
}