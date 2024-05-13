<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\User;
use App\Models\Ticket;
use App\Models\client;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Pusher\Pusher;

class ClientController extends Controller
{
    public function ajouteClient()
    {
        return view('ajout_client');
    }
    public function listeClient()
    {
        $clients = client::all();

        return view('list_client', [
            'clients' => $clients,
        ]);
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('edit', [
            'client' => $client
        ]);

    }
    public function update(ClientRequest $request, $id)
    {
    // Récupérez le client à mettre à jour
    $client = Client::findOrFail($id);

    // Utilisez les données validées pour mettre à jour le client
    $client->nom = $request->input('nom');
    $client->prenom = $request->input('prenom');
    $client->email = $request->input('email');
    $client->numero = $request->input('numero');
    $client->fonction = $request->input('fonction');

    // Enregistrez les modifications dans la base de données
    $client->save();

    return redirect()->route('client.listeClient')->with('success', 'Modification réussie...');
    }
    public function store(Client $client, ClientRequest $request)
    {
        Client::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'numero' => $request->numero,
            'fonction' => $request->fonction,
        ]);
    
        session()->put('new_client_added', true);
        
        return redirect()->route('client.listeClient')->with('success', 'Ajout réussi...');
    }
    

    public function delete($id)
    {
        $client = Client::findOrFail($id);

    // Supprimez le client de la base de données
        $client->delete();

        return redirect()->route('client.listeClient')->with('success', 'Suppression réussie...');
    }

    public function getNotif(){
        $nbr = Client::getNbrNotif();

        return json_encode( ["nbr"=>$nbr] ) ;
    }
}
