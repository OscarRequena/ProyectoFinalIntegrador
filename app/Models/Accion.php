<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;

    public function h_ticket()
    {
        return $this->hasOne(Historial_ticket::class);
    }
}
