@extends('layouts.guest')

@section('content')
    <div class="container">
        <div>
            <h1>{{$spu->name}}</h1>
            <form action="{{route('appointment.store', [ 'slug' => $spu->company->slug, 'spu_id' => $spu->id])}}">
                <input type="datetime-local" name="date">
                <button type="submit">提交</button>
            </form>
        </div>
    </div>
@endsection
