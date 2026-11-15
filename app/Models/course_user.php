<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course_user extends Model
{
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
