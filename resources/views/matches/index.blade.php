@extends('master')

@section('content')
	<div class="row">
		<div class="col-lg-6  col-lg-offset-2 col-xs-10 col-xs-offset-1">
			
		<div class="match-container" id="matches">
			<h1>Scores & Fixtures</h1>
		     <?php
		     	$count = 0;
		     	$liveRound = 33;

		     	foreach ($matches as $match) {
		     		// $roundBool= ($match->match_id - 1) % 10 == 0;
		     		if(($match->match_id - 1) % 10 == 0) {
		     			$class = '';
		     			if($match->day == $liveRound) {
		     				$class = 'active';
		     			}

		     			echo "<div class='round-container {$class}' id='round-{$match->day}'>";
		     			echo "<h3>Day {$match->day}</h3>";
		     			
		     			// $endDiv = true;
		     		}
		     		// else $endDiv = false; 

		     		echo "<div class='item'>";
		     		
		     		if(isset($match->home_goals)) {
		     			$res = "<div class='big'>".$match->home_goals." - ".$match->away_goals."</div><div>finished</div>";
		     		}
		     		// else $res = '-';
		     		else  {
		     			$date = strtotime($match->time);
		     			// $res = date('H:i d/M', $date);
		     			$res = "<div class='big'>".date('H:i', $date)."</div><div>".date('d/M', $date)."</div>";
		     		}

		     		$homeName = $matchesName[$count]['home'];
		     		$awayName = $matchesName[$count]['away'];

		     		$homeLogo = $logos[$count]['home'];
		     		$awayLogo = $logos[$count]['away'];

		     		echo "<div class='home'><img src='imgs/logos/{$homeLogo}.png'><p>{$homeName}</p></div>";
		     		echo "<div class='res'>{$res}</div>";
		     		echo "<div class='away'><img src='imgs/logos/{$awayLogo}.png'><p>{$awayName}</p></div >";

		     		echo "</div>";
		     		if(($match->match_id) % 10 == 0) {
		     			echo "</div>";
		     		}
		     		$count++;
		     	}
		     ?>

		     <div class="round-nav" id="nav">
				<a href="" class="back" id="back"><span class="oi oi-caret-left"></span></a>
				<p class="round-select"></p>
				<a href="" class="forward" id="forward"><span class="oi oi-caret-right"></span></span></a>
			</div>	 

		</div>
		</div>	
	</div>
	<script type="text/javascript">

		var $nav = $('#nav').find('a');
		var $currentRound = $('#matches').find('.active');
		

		$nav.click(function() {
			event.preventDefault();

			$currentRound.removeClass('active');

			if($(this).hasClass('back')) {
				$currentRound = $currentRound.prev();
			}
			else {
				$currentRound = $currentRound.next();
				console.log($currentRound);
			}
			$currentRound.addClass('active');
		})


	</script>
	
@stop