@extends('layouts.app')

@section('content')
	<div class="container welcome-page">
	    FACEBOOK LIKE PAGE
	</div>
	<div class="panel panel-default col-md-4 col-md-offset-4" style="text-align: center;" >
	<div class="panel-heading">POSTS</div>
		<div class="panel-body">
		    @foreach ($posts as $post)
		    	<h2>{{ $post->title }}</h2>
		    @endforeach
		</div>
	</div>
@endsection
