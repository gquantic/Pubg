<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tournament;

class TournamentPlayers extends Model
{
    use HasFactory;

    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'tournament_players';

    /**
     * Получить сам турнир.
     */
    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }
}
