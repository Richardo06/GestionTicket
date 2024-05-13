<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controllers\RapportController;
use App\Models\Ticket;

class Rapport extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'action_realise', 'resultat_obtenu', 'commentaire_supplementaire'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
