<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    public function coaches()
    {
        return $this->belongsTo(Coach::class, 'id', 'realcoaches_id');
    }


}
