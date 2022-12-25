@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('spu.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameInput" class="form-label">服务名称</label>
                <input type="text" name="name" required class="form-control" id="nameInput" placeholder="">
            </div>
            <x-button type="submit" class="btn-primary">确定</x-button>
        </form>
    </div>
@endsection
