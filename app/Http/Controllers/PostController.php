<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Players;
use App\Teams;

class PostController extends Controller {

    public function index() {
        $players = Players::get();
        // $players = DB::table('players')->get();
        // $teams = DB::table('teams');

       foreach ($players as $index => $player) {
       /*     $team = $teams->where('team_id', $player->team_id)->pluck('name');
            $teams = DB::table('teams');*/

            $t = Teams::where('team_id', '=', $player->team_id)->get();//->name;
            foreach ($t as $val) {
                $team = $val->name;
            }

            echo $index." ".$player->name." - ".$team;
            echo "</br>";
            // return view('post');
       }

    }

  
    
}
