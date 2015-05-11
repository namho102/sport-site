@extends('standing.index')

@section('standing')
	<?php
		$pos = 0;
	?>
	<div>
		<table class="table">
			<thead>
				<tr>
					<th>Pos</th>
					<th>Player</th>
					<th>Club</th>
					<th>Goals</th>
				</tr>
			</thead>
			<tbody>
				@foreach($players as $player) 
					
					<tr>
						<?php 
							$club = $teams[$pos];
							$pos++
						?>

						<td>{{ $pos }}</td>
						<td><a href="" title="" class="player">{{ $player->name }}</a></td>
						<td><a href="" title="">{{$club}}</a></td>
						<td class="pts">{{ $player->goals }}</td>
				
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop