@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assalamualaikum User : <b>{{ Auth::user()->name}}</b></div>

                <div class="panel-body">
                    You are logged in User
                </div>
            </div>
        </div>
    </div>
</div>
@endsection