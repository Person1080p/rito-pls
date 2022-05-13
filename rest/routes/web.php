<?php

use Illuminate\Support\Facades\DB;
use App\Riot\RiotClient;

Route::get('/', function () {
  $visited = DB::select('select * from places where visited = ?', [1]);
  $togo = DB::select('select * from places where visited = ?', [0]);

  return view('travellist', ['visited' => $visited, 'togo' => $togo ] );
});

$summoner = RiotClient::getSummoner("NotVechs");
print_r(json_encode($summoner, JSON_PRETTY_PRINT));