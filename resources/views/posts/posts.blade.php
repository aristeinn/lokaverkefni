@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach (['danger', 'warning', 'success', 'info'] as $key)
             @if(Session::has($key))
                 <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
             @endif
            @endforeach
            <div class="panel panel-default">
                <div class="panel-heading">All posts</div>

                <div class="panel-body">

                    @foreach ($posts as $post)

                        <a href="/posts/{{ $post->id }}"><h2>{{ $post->title }} <small>{{ $post->likes()->count() }} <i class="fa fa-thumbs-up"></i></small></h2></a>
                        <p>Post by: {{ $post->user->name }}</p>
                        @foreach ($post->likes as $user)
                            {{ $user->name }} likes this !<br>
                        @endforeach

                        @if ($post->isLiked)
                            <a href="{{ route('post.like', $post->id) }}">Unlike</a>
                        @else
                            <a href="{{ route('post.like', $post->id) }}">Like!</a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">My likes</div>

                <div class="panel-body">
                    @foreach (Auth::user()->likedPosts as $post)

                        <h2>{{ $post->title }}</h2>

                        <a href="{{ route('post.like', $post->id) }}">Unlike</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
