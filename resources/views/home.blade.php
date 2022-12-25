@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <a class="btn btn-primary" type="button" href="{{route('spu.create')}}">+ 新的服务项目</a>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @foreach($spus as $spu)
                <div class="col mb-3">
                    <x-product :product="$spu"></x-product>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const App = {
            setup() {
                return {
                    loading: false,
                }
            }
        }
        const app = Vue.createApp(App)
        app.mount('#app')
    </script>
@endpush
