<?php

namespace App\Http\Controllers;

use App\Models\MassPrize;
use Illuminate\Http\Request;

class MassPrizeControllerController extends Controller
{
    public static function get($tournament)
    {
        return MassPrize::where('tournament', $tournament)->first();
    }
}
