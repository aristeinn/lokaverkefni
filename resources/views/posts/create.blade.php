@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CREATE POST</div>
                @include('errors.errors')
                <div class="panel-body">
                    <form method="POST" action="/posts">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Title: </label>
                            <textarea type="text" name="title" value="{{ old('title') }}" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">POST</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection