<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Helpinghand extends Model
{
    public function tags(){
       return  $this->belongsToMany(Tag::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
