<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\client;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    return redirect()->route('listeClient')->with('success', 'Modification réussie...');
    }
    public function store(client $client,ClientRequest $request)
    {
        dd($request->all());
        client::create([
            'nom' => $request -> nom,
            'prenom' => $request -> prenom,
            'email' => $request -> email,
            'numero' => $request -> numero,
            'fonction' => $request -> fonction,
        ]);
        return redirect()->back()->with('success', 'le client a bien été enregistrer');

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

    public function delete($id)
    {
        $client = Client::findOrFail($id);

    // Supprimez le client de la base de données
        $client->delete();

        return redirect()->route('listeClient')->with('success', 'Suppression réussie...');
    }

    public function getNotif(){
        $nbr = Client::getNbrNotif();

        return json_encode( ["nbr"=>$nbr] ) ;
    }
}
