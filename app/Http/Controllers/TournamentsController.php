<?php

namespace App\Http\Controllers;

use App\Models\Game_card;
use App\Models\Tournament;
use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Models\TournamentPlayers;
use Carbon\Carbon;
use Date;
use DateTime;
use Illuminate\Support\Facades\DB;
use View;

class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = Tournament::all();

        return view('tournaments.index', compact('tournaments'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        // Инфорация о турнире
        $info = $this->getTournamentInformation($tournament->id);
        $budget = $this->getTournamentBudget($tournament->id);
        $card = Game_card::findOrFail($tournament->card);
        $isRegisteredOnTournament = TournamentPlayers::where('user', \Auth::user()->id)->where('tournament', $tournament->id)->count();

        // Выделяем участников
        $tournamentPlayers = TournamentPlayers::where('tournament', $info['tournament']->id)->get();

        // Генерируем дату для проверки
        $nowDate = date('Y-m-d H:i:s');

        if ($info['tournament']->end_date < $nowDate) {
            // Если турнир уже завершён
            return View('tournaments.result', compact('info', 'budget', 'card', 'isRegisteredOnTournament', 'tournamentPlayers'));
        } else {
            return view('tournaments.show', compact('info', 'budget', 'card', 'isRegisteredOnTournament', 'tournamentPlayers'));
        }
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
            'tournament' => Tournament::where('id', $id)->first(), // Сам турнир
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
