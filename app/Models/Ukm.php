<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ukm extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "ukms";
    protected $primaryKey = "id";

    protected $fillable = [
        'nama',
        'email',
        'password',
    ];
    
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
