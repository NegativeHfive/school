<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    /*public function subjects()BelongsToMany{
        //return $this->hasMany(Subject::class, 'teachers_id');
    }*/

    public function subjects():BelongsToMany{
        return $this->belongsToMany(Subject::class );
    }
}
