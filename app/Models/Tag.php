<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function helpinghands(){
        return $this->belongsToMany(Helpinghand::class);
    }
}
