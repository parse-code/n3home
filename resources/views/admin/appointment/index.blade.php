@extends('layouts.app')

@section('content')
    <div class="container">

        <nav class="nav">
            <a class="nav-link active" aria-current="page" href="#">Upcoming</a>
            <a class="nav-link" href="#">Past</a>
            <a class="nav-link" href="#">Canclled</a>
            <a class="nav-link disabled">All</a>
        </nav>

        <ul class="list-group">
            @foreach($appointments as $appointment)
                <li class="list-group-item">{{$appointment->spu->name}} {{$appointment->user->name}} {{$appointment->scheduled_at}}</li>
            @endforeach
        </ul>
    </div>
@endsection
