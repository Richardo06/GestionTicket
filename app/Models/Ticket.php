<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\notifications\Notifiable;
use App\Models\Rapport;

class Ticket extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = ['', '', '', '', ''];

    protected $table = 'tickets';

    public function rapport()
    {
        return $this->hasMany(Rapport::class);
    }
}
