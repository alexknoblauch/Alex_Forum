<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Comment;
use App\Models\Gemeinde;
 

class Travel extends Model
{

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function gemeinde(){
        return $this->belongsTo(Gemeinde::class);
    }

 
}
