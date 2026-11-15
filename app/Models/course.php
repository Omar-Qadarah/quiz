<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function lecturer()
    {
        return $this->belongsTo(lecturer::class);
    }
    public function courseUser()
    {
        return $this->hasMany(course_user::class);
    }
    public function lecture()
    {
        return $this->hasMany(lecture::class);
    }
}
