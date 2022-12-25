@extends('layouts.guest')

@section('content')
    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('appointment.index', ['slug'=>$spu->company->slug])}}">{{$spu->company->name}}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$spu->name}}</li>
            </ol>
        </nav>
        <div>
            <form action="{{route('appointment.store', [ 'slug' => $spu->company->slug, 'spu_id' => $spu->id])}}"
                  method="post">
                @csrf
                <input type="datetime-local" name="date">
                <button type="submit">提交</button>
            </form>
        </div>
    </div>
@endsection
