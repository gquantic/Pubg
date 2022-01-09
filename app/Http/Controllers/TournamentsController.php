<?php

namespace App\Http\Controllers;

use App\Models\game_card;
use App\Models\Tournament;
use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Models\TournamentPlayers;
use Illuminate\Support\Facades\DB;

class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(Tournament::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTournamentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTournamentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        $info = $this->getTournamentInformation($tournament->id);
        $budget = $this->getTournamentBudget($tournament->id);
        $card = Game_card::findOrFail($tournament->card);
        $isRegisteredOnTournament = TournamentPlayers::where('id', \Auth::user()->id)->get();

        return view('tournaments.show', compact('info', 'budget', 'card', 'isRegisteredOnTournament'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit(Tournament $tournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTournamentRequest  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTournamentRequest $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        //
    }

    /**
     * Get tournament information.
     *
     * @param $id
     */
    public function getTournamentInformation($id)
    {
        return [
            'tournament' => Tournament::findOrFail($id)->first(), // Сам турнир
            'details' => DB::table('tournaments_details')->where('tournament', $id), // Детали
            'players' => DB::table('tournament_players')->where('tournament', '=', $id)->count(), // Кол-во игроков
        ];
    }

    /**
     * Get tournament budget.
     *
     * @param $id
     */
    public function getTournamentBudget($id)
    {
        $info = $this->getTournamentInformation($id);
        return $info['tournament']['enter_price'] * $info['players'];
    }
}
