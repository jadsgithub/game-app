<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $timestamps = true;
    protected $table = 'teams';
    protected $fillable = [
        'team_name',
        'victories',
        'defeats',
        'flag'
    ];
}