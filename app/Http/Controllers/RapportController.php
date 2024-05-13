<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RapportRequest;
use App\Models\Rapport;
use App\Models\Ticket;

class RapportController extends Controller
{
   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajouteRapport()
    {
        $tickets = Ticket::pluck('id');

        return view('rapport.ajout_rapport', compact('tickets'));
    }

/**
 * Store a newly created resource in storage.
 */
   
 public function store(RapportRequest $request)
 {
     Rapport::create([
         'ticket_id' => $request->input('ticket_id'),
         'action_realise' => $request->input('action_realise'),
         'resultat_obtenu' => $request->input('resultat_obtenu'),
         'commentaire_supplementaire' => $request->input('commentaire_supplementaire'),
     ]);
 
    session()->put('new_rapport_added', true);
 
     return redirect()->route('Rapport.list_rapport')->with('success', 'Le rapport a bien été enregistré...');
 }
 

    public function listeRapport()
    {
        $rapports = Rapport::all();
        $ticket = Ticket::pluck('id');

        return view('rapport.list_rapport', compact('rapports', 'ticket'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $rapport = Rapport::find($id);
    // Utilisez la relation pour récupérer le ticket associé
    $ticket = $rapport->ticket;
    
    return view('Rapport.edit_rapport', [
        'rapport' => $rapport,
        'ticket' => $ticket
    ]);
}
        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rapport = Rapport::findOrFail($id);

        $rapport->ticket_id = $request->input('ticket_id');
        $rapport->action_realise = $request->input('action_realise');
        $rapport->resultat_obtenu = $request->input('resultat_obtenu');
        $rapport->commentaire_supplementaire = $request->input('commentaire_supplementaire');

        $rapport->save();

        return redirect()->route('Rapport.list_rapport')->with('success', 'Modification réussit...');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $rapport = Rapport::findOrFail($id);

        $rapport->delete();

        return redirect()->route('Rapport.list_rapport')->with('success', 'Suppression réussit...');

    }
}
