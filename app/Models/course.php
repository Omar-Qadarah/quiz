<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function lecturer()
    {
        return $this->belongsTo(lecturer::class);
    }
}
