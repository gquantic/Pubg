<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\TournamentPlayers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function authorize($ability, $arguments = [])
    {
        return Auth::check();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (TournamentPlayers::where('user', Auth::user()->id)->where('tournament', $request->tournament_id)->exists())
            return redirect()->back()->with('error', 'Вы уже зарегистрированы на этот турнир.');

        $player = new TournamentPlayers;

        $player->tournament = $request->tournament_id;
        $player->user = Auth::user()->id;
        $player->nickname = $request->user_name;
        $player->game_id = $request->user_id;

        $player->save();

        // Достаём турнир
        $tournament = Tournament::where('id', $request->tournament_id)->first();

        // Редактируем баланс пользователя
        User::where('id', Auth::id())->update(['balance' => Auth::user()->balance - $tournament['enter_price']]);

        return redirect('/home')->with('success', 'Вы успешно зарегистрировались!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getUserEnteredTournaments($id)
    {
        $tournamentsList = [];
        $enteredTournamentsList = TournamentPlayers::where('user', $id)->get();

        foreach ($enteredTournamentsList as $enteredTournament) {
            $tournamentInfo = Tournament::where('id', $enteredTournament->tournament)->first();
            $tournamentsList[] = $tournamentInfo;
        }

        return $tournamentsList;
    }
}
