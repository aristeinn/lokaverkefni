@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thread Title</div>

                <div class="panel-body">
                    <article>
                        <div>
                            Thread Body
                        </div>
                        <div class="body">
                        <textarea rows="4" cols="50"></textarea>
                        <input type="submit">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
