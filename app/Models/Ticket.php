<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function incidencia()
    {
        return $this->belongsTo(Incidencia::class,'id_incidencia');
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class,'id_estado');
    }

    public function h_ticket()
    {
        return $this->hasOne(Historial_ticket::class);
    }

}
