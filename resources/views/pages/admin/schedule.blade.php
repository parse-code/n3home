@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <a href="#" role="button" class="text-decoration-none text-primary me-2">即将到来</a>
            <a href="#" role="button" class="text-decoration-none text-muted me-2">已完成</a>
            <a href="#" role="button" class="text-decoration-none text-muted me-2">已取消</a>
            <a href="#" role="button" class="text-decoration-none text-muted me-2">所有</a>
            <div class="float-end">
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-filter"></i>
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover m-0">
                    <thead>
                    <th>#</th>
                    <th>客户</th>
                    <th>服务</th>
                    <th>时间 <i class="bi bi-sort-down"></i></th>
                    <th>状态</th>
                    </thead>
                    <tbody>
                    <tr role="button" onclick="location.href='{{route('appointment')}}'">
                        <td>1</td>
                        <td>张先生</td>
                        <td>空调清洗 - 4台</td>
                        <td>2022年12月30日 周五 下午</td>
                        <td>待服务</td>
                    </tr>
                    <tr role="button" onclick="location.href='{{route('appointment')}}'">
                        <td>2</td>
                        <td>王小姐</td>
                        <td>空调清洗+充气 - 2台</td>
                        <td>2023年01月01日 周二 上午</td>
                        <td>待服务</td>
                    </tr>
                    <tr role="button" onclick="location.href='{{route('appointment')}}'">
                        <td>3</td>
                        <td>李先生</td>
                        <td>空调清洗 - 3台</td>
                        <td>2023年01月12日 周六 下午</td>
                        <td>待服务</td>
                    </tr>
                    <tr role="button" onclick="location.href='{{route('appointment')}}'">
                        <td>4</td>
                        <td>先锋科技公司</td>
                        <td>空调清洗 - 12台</td>
                        <td>2023年01月20日 周三 下午</td>
                        <td>待服务</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
