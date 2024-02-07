<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class client extends Model
{
    use HasFactory;

    protected $guarded = ['', '', '', '', ''];

    protected $table = 'clients';

    public static function getNbrNotif(){
        $sQl = DB::select("select count(*) as nbr from tickets");
        
        $nbr = 0;
        foreach ($sQl as $sQls => $s) {
            $nbr = $s->nbr;            
        }

        return $nbr;
    }
}
