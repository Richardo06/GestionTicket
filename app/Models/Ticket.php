<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\notifications\Notifiable;

class Ticket extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = ['', '', '', '', ''];

    protected $table = 'tickets';
}
