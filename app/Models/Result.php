<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public $timestamps = true;
    protected $table = 'results';
    protected $fillable = [
        'game_id',
        'team_one_id',
        'team_two_id',
        'team_one_score',
        'team_two_score',
        'round',
        'team_winner_id',
        'team_loser_id'
    ];
}
