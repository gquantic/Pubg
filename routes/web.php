<?php

use App\Http\Controllers\PlayersController;
use App\Models\Game;
use App\Models\Tournament;
use App\Models\TournamentPlayers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');
Auth::routes();

/*
 * Роутеры для всех страниц - прописать всё группами.
 */

Route::get('/admin', function (){
    return view('admin/index');
})->name('admin')->middleware('admin');

Route::get('/admin/blockedusers', function (){
    return view('admin/pages/blockedusers');
})->name('banned')->middleware('admin');

Route::view('/', 'land.index')->name('land-home');
Route::view('/contacts', 'land.contacts')->name('land-contacts');


Route::resource('faq', \App\Http\Controllers\FaqController::class);

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/index');
    })->name('admin');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resources([
        'tournaments' => TournamentsController::class,
        'players' => PlayersController::class,
    ]);

    Route::get('/tournaments/game/{game}', function ($game) {
        $gameInfo = Game::where('id', $game)->first();
        $tournaments = Tournament::where('game', $game)->get();

        return view('tournaments.index', compact('tournaments', 'gameInfo'));
    });
});

Route::prefix('additaccess')->middleware('unusualUser')->group(function () {
    Route::resources([
        'translations' => \App\Http\Controllers\TranslationController::class,
        'users' => \App\Http\Controllers\UserController::class,
    ]);

    Route::view('/', 'privilege.panel');

    Route::get('/tournaments/enter/{id}', function ($id) {
        $isRegisteredOnTournament = TournamentPlayers::where('user', \Auth::user()->id)->where('tournament', $id)->count();
        $tournament = Tournament::where('id', $id)->first();

        return view('tournaments.enter', compact('tournament', 'isRegisteredOnTournament'));
    })->middleware('auth');

    Route::prefix('my')->group(function () {
        Route::get('/tournaments', function (PlayersController $playersController) {
            return view('my.tournaments', ['tournaments' => $playersController->getUserEnteredTournaments(Auth::id())]);
        });

        Route::get('details', function (User $user) {

        });
    });
});
