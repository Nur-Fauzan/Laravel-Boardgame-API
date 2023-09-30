<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'min_players',
        'max_players',
        'min_playtime',
        'max_playtime',
        'min_age',
        'description',
        'publishername',
        'designername',
        'remember_token'
    ];
}
