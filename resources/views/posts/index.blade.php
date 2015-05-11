@extends('master')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-lg-offset-2">
			<div class="posts-container">
				@foreach($posts as $post)
				<section>
					<img src="/post_img/{{$post->thumb}}" alt="">
					<h2><a href='/news/{{$post->name}}'>{{ $post->title }}</a></h2>
					<p>By NiceFoot - {{date('M/d', strtotime($post->post_date))}}</p>
				</section>
		
				@endforeach
			</div>	
			

		</div>
	</div>

	
@stop