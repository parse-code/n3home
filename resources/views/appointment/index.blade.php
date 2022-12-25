@extends('layouts.guest')

@section('content')
    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>{{$company->name}}</a>
                </li>
            </ol>
        </nav>
        <div>
            <ul>
                @foreach($spus as $spu)
                    <li>
                        <a href="{{route('appointment.create', ['slug' => $company->slug, 'spu_id' => $spu->id])}}">{{$spu->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
