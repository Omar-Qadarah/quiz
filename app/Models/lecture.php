<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lecture extends Model
{
    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
