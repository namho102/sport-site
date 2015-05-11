<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use App\Matches;
use App\Teams;


class MatchController extends Controller {

	private $matches;
	private $matchesName = array();
	private $logos = array();

    public function __construct(Matches $matches) {
        $this->matches = $matches;
    }
	

	public function index()
	{	
		$matches = $this->matches->get();
		foreach ($matches as $match) {
			$matchesName[] = $this->getMatchesList($match);
			$logos[] = $this->getLogosList($match);
			// var_dump($this->getMatchesList($match));
			// echo "</br>";
		}

	
		
		return view('matches.index', compact('matches', 'matchesName', 'logos'));
		// return view('matches.index', compact('matches'));
	}

	public function getMatchesList($match) {
		$teamName = [];

		$team = Teams::where('team_id', '=', $match->home_id)->get();
		$teamName['home'] = $team[0]->name;
		$team = Teams::where('team_id', '=', $match->away_id)->get();
		$teamName['away'] = $team[0]->name;

		// var_dump($this->matchesName);
		return $teamName;
	}

	public function getLogosList($match) {
		$logo = [];

		$team = Teams::where('team_id', '=', $match->home_id)->get();
		$logo['home'] = $team[0]->slug;
		$team = Teams::where('team_id', '=', $match->away_id)->get();
		$logo['away'] = $team[0]->slug;

		return $logo;
	}

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
