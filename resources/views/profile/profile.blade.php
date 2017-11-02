@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
        <div style="font-size:30px;">Ari Steinn Guðmundsson Meðlimur í 3 vikur</div>
        <hr>
        @foreach($threads as $thread)
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $thread['title'] }} <a href="{{ $thread['anchor'] }}">Laravel Controller</a>
                </div>
                <div class="panel-heading">
                    {{ $thread['body'] }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $thread['title2'] }} <a href="{{ $thread['anchor2'] }}">Laravel 5.4</a>
                </div>
                <div class="panel-heading">
                    {{ $thread['body2'] }}
                </div>
            </div>
            @endforeach
        </div>
            <div class="panel panel-default col-md-3">
                <div class="panel-body">
                    <div>
                    Nafn
                        <p>Ari Steinn Guðmundsson</p>
                    </div>
                    <div>
                    Netfang
                        <p>aristeinn@gmail.com</p>
                    </div>
                    <div>
                    Fjöldi þráða
                        <p>10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
