@extends('master')

@section('content')
	<div class="row">
		<div class="col-lg-2 ">
			<div class="standing-nav">
				
				<ul class="nav nav-pills nav-stacked nav-inserve">
					<?php 
						$tableActive = '';
						$topScoresActive = '';
						$topAssistsActive = '';

						if($route == 'table') {
							$tableActive = 'active';
						}
						elseif($route == 'top-scores') {
							$topScoresActive = 'active';
						}
						else $topAssistsActive = 'active';
					?>
					
				  <li role="presentation"  class={{$tableActive}} ><a href="/standing/table">Table</a></li>
				  <li role="presentation" class={{$topScoresActive}}><a href="/standing/top-scores">Top Scores</a></li>
				  <li role="presentation" class={{$topAssistsActive}}><a href="/standing/top-assists">Top Assists</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-6 col-lg-offset-1">

			@yield('standing')

		</div>
	</div>
	
	

@stop