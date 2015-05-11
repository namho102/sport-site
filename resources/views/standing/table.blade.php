@extends('standing.index')

@section('standing')
	<div>
		<table class="table">
			<thead>
				<tr>
					<th>Pos</th>
					<th>Team</th>
					<th>Pts</th>
					<th>P</th>
					<th>W</th>
					<th>D</th>
					<th>L</th>
					<th>GF</th>
					<th>GA</th>
					<th>GD</th>
				</tr>
			</thead>
			<tbody>
				@foreach($standing as $row) 
					
					@if ($row->pos_id <= 4)
						<tr class="top4">
					@elseif ($row->pos_id >= 18)
						<tr class="bottom3">
					@else
						<tr>
					@endif
	
						<td>{{$row->pos_id}}</td>
		
						<td><a href="" title="">{{ $table[$row->pos_id]['club'] }}</a></td>

						<td class="pts">{{$row->pts}}</td>
						<td>{{$row->p}}</td>
						<td>{{$row->w}}</td>
						<td>{{$row->d}}</td>
						<td>{{$row->l}}</td>
						<td>{{$row->gf}}</td>
						<td>{{$row->ga}}</td>
						<td>{{$row->gd}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop