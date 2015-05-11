<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use App\Standing;
use App\Teams;
use App\Players;


class StandingController extends Controller {


	public function index()
	{	
		return view('standing.index');
	}

	public function table() {
		
		$standing = Standing::get();	

		$table = array([]);

		foreach ($standing as $row) {
			$club = Teams::where('team_id', '=', $row->team_id)->pluck('name');
			$table[] = ['pos' => $row->pos_id, 'club' => $club];
			// $table[]['club'] = Teams::where('team_id', '=', $row->team_id)->get();
		}

		// print_r($table);
		$route = 'table';
		return view('standing.table', compact('standing', 'table', 'route'));
	}

	public function topScores() {
		$route = 'top-scores';
		
		$players = Players::where('goals', '>', 5)->orderBy('goals', 'DESC')->get();
		// print_r($players[0]);

		$teams = array();

		foreach ($players as $player) {
			$club = Teams::where('team_id', '=', $player->team_id)->pluck('name');
			$teams[] = $club;	
			// $table[]['club'] = Teams::where('team_id', '=', $row->team_id)->get();
		}

		// print_r($teams);

		return view('standing.top-scores', compact('players', 'teams', 'route'));
	}

	public function topAssists() {
		
		$route = 'top-assists';
		return view('standing.top-assists', compact('route'));
	}
	
}
