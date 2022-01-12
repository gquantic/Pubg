<?php

use App\Models\TournamentPlayers;
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

Route::get('/', function () {
    return view('welcome');
});

/*
 * Роутеры для всех страниц - прописать всё группами.
 */

Route::get('/admin',function (){
    return view('admin/index');
})->name('admin')->middleware('admin');

Route::get('/admin/blockedusers', function (){
    return view('admin/pages/blockedusers');
})->name('banned')->middleware('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'tournaments' => TournamentsController::class,
    'players' => \App\Http\Controllers\PlayersController::class,
]);

Route::get('/tournaments/enter/{id}', function ($id) {
    $isRegisteredOnTournament = TournamentPlayers::where('user', \Auth::user()->id)->count();
    $tournament = \App\Models\Tournament::where('id', $id)->first();

    return view('tournaments.enter', compact('tournament', 'isRegisteredOnTournament'));
})->middleware('auth');
