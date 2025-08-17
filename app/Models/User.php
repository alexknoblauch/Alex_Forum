<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function helpinghands(){
        return $this->hasMany(Helpinghand::class);
    }

    public function travels(){
        return $this->hasMany(Travel::class);
    }

    public function cookings(){
        return $this->hasMany(Cooking::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tricks(){
        return $this->hasMany(Trick::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
