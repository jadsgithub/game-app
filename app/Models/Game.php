<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $timestamps = true;
    protected $table = 'games';
    protected $fillable = [
        'game_name',
    ];
}
