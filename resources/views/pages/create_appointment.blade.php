@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                添加预约
            </div>
            <div class="card-body">
                <div class="mt-3">
                    <div>
                        <div class="row mb-3 g-2">
                            <div class="col-sm">
                                <label for="type" class="form-label">选择服务项目</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="">-</option>
                                    <option value="1">空调清洗</option>
                                    <option value="2">空调清洗+充气</option>
                                    <option value="3">空调维修</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label for="quantity" class="form-label">数量</label>
                                <input class="form-control" type="number" id="quantity" placeholder="数量">
                            </div>
                            <div class="col-sm">
                                <label for="date" class="form-label">服务日期</label>
                                <input class="form-control" type="date" id="date">
                            </div>
                            <div class="col-sm">
                                <label for="time" class="form-label">服务时间</label>
                                <select id="time" class="form-control">
                                    <option value="">-</option>
                                    <option value="1">上午</option>
                                    <option value="2">下午</option>
                                </select>
                            </div>
                        </div>
                        <hr class="dropdown-divider">
                        <div class="mb-3 row g-2">
                            <div class="col-sm">
                                <label for="name" class="form-label">姓名</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-sm">
                                <label for="phone" class="form-label">电话</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="row mb-3 g-2">
                            <div class="col-sm">
                                <label for="address" class="form-label">地址</label>
                                <input type="text" class="form-control" id="address">
                            </div>
                            <div class="col-sm">
                                <label for="postcode" class="form-label">邮编</label>
                                <input type="text" class="form-control" id="postcode">
                            </div>

                            <div class="col-sm">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">备注</label>
                            <textarea id="address" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">提交预约
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">您的预约已经提交成功</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="text-muted">服务项目:</span> 空调清洗 - 4台</li>
                        <li class="list-group-item"><span class="text-muted">服务时间:</span> 2022年12月30日 周五 下午
                        </li>
                        <li class="list-group-item"><span class="text-muted">服务地址:</span> 12 Tai seng, S221235</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">修改预约</button>
                    <a href="{{route('appointment')}}" type="button" class="btn btn-primary">查看预约详情</a>
                </div>
            </div>
        </div>
    </div>
@endsection
