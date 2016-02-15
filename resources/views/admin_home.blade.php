@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Administrator</div>

                <div class="panel-body">
                    Welcome page : <b>{{ Auth::user()->name}}</b><br>
                    Anda Login Sebagai Admin, Anda bisa melakukan manajemen data
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
