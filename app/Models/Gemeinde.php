<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Travel;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Gemeinde extends Model
{
    protected $guarded = [];
    use HasFactory;
    
    public function travel(){
        return $this->hasMany(Travel::class);
    }
}
