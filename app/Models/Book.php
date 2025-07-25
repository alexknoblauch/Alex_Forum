<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   public function user(){
    return $this->belongsTo(User::class);
   } 

   public function author(){
    return $this->belongsTo(Author::class);
   }
}
