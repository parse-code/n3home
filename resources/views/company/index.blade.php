@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $company->name }}</div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($products as $product)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{$loop->index==0?'active':''}}"
                                            id="product-{{$product->id}}"
                                            data-bs-toggle="tab" data-bs-target="#product-{{$product->id}}-pane"
                                            type="button" role="tab" aria-controls="home-tab-pane"
                                            aria-selected="true">
                                        {{$product->name}}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($products as $product)
                                <div class="tab-pane fade {{$loop->index==0?'show active':''}}"
                                     id="product-{{$product->id}}-pane" role="tabpanel"
                                     aria-labelledby="product-{{$product->id}}-pane" tabindex="{{$loop->index}}">
                                    <ul class="list-group list-group-flush mt-2">
                                        @foreach($product->specs as $spec)
                                            <li v-on:click="selectProductSpec({{$spec->id}})"
                                                v-bind:class="{active: selected_product_spec_id == {{$spec->id}} }"
                                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                                <div>
                                                    {{$spec->name}}
                                                </div>
                                                <span class="badge bg-primary rounded-pill">$ {{$spec->price}}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                        <template v-if="selected_product_spec_id">
                            <hr>
                            <div class="mt-2 d-flex justify-content-between ">
                                <input class="d-inline-block form-control" type="datetime-local" style="width: 170px;">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">继续 >></button>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">登录</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">继续</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        Vue.createApp({
            data: function () {
                return {
                    selected_product_spec_id: null
                }
            },
            methods: {
                selectProductSpec: function (id) {
                    this.selected_product_spec_id = id;
                }
            }
        }).mount('#app');
    </script>
@endpush
