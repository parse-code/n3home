@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">空调清洗</h5>
                        <p class="card-text"><a href="#">12</a> 个待办预约</p>
                        <p class="card-text">
                            <small class="text-muted">
                                编辑
                            </small>
                            <small class="text-muted ms-1">
                                链接
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 123px;">
                    <div class="card-body">
                        <a href="/product/create">+ 新的服务项目</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
