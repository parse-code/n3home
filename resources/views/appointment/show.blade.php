@extends('layouts.guest')

@section('content')
    <div class="container my-4">
        <h1>{{$appointment->status}}</h1>
        <p>{{$appointment->company->name}} - {{$appointment->spu->name}}</p>
        <p>{{$appointment->scheduled_at}}</p>
        <p>{{$appointment->user->name}}</p>
        @can('update', $appointment)
            <button>修改</button>
        @endcan
    </div>
@endsection
