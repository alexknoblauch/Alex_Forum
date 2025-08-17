<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function commentable(){
        return $this->morphTo();
    } 

    public function user(){
        return $this->belongsTo(User::class);
    }

    ## Alle Kommentare des Beitrags anzeigen
    public static function fetchMorphedComments($id, $type){
        return self::with('user')->where('commentable_id', $id)->where('commentable_type', $type)->latest()->get();
    }

}
