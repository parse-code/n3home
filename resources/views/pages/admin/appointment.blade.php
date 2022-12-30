@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="float-end">
                    <button class="btn-sm btn btn-success"><i class="bi bi-check"></i> 服务完成</button>
                    <button class="btn-sm btn btn-secondary"><i class="bi bi-pencil"></i> 修改时间</button>
                    <button class="btn-sm btn btn-secondary"><i class="bi bi-chat"></i> 沟通记录</button>
                    <button class="btn btn-sm btn-secondary" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">分配服务人员</a></li>
                        <li><a class="dropdown-item" href="#">联系客户</a></li>
                        <li><a class="dropdown-item" href="#">发送位置信息</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="#">取消预约</a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <span class="fs-3">张先生</span>
                    <span class="badge bg-info fs-6 ms-1"><i class="bi bi-shop-window"></i> 空调清洗 - 4 台</span>
                    <span class="badge bg-primary fs-6 ms-1"><i
                            class="bi bi-calendar-check"></i> 12月30日 周五 上午</span>
                </div>
                <div>
                    <i class="bi bi-geo"></i> 5855 W Century Blvd, Los Angeles - 90045 (15km, 23 分钟)
                    <i class="ms-3 bi bi-phone"></i> +65 8888 7777
                </div>
                <div>

                </div>
            </div>
            <div class="card-body ">
                <div class="mb-2 text-muted">
                    <span><i class="bi bi-sort-down"></i> 时间由近到远</span>
                    <span class="ms-2"><i class="bi bi-funnel"></i> 只看客户</span>
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <small class="float-end text-muted">张先生</small>
                        <span class="text-muted">12月30日 16:16:31</span> 客户评价
                    </div>
                    <div class="card-body">
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div>
                            服务专业, 非常满意
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <small class="float-end text-muted ">李峰</small>
                        <span class="text-muted">12月29日 12:22:10</span> 完成服务
                    </div>
                    <div class="card-body">
                        <div>
                            <img class="border rounded shadow"
                                 src="https://www.weiweiaircon.com.sg/wp-content/uploads/type-of-air-conditioner-singapore-wei-wei-1024x768-1.jpg"
                                 height="60" alt="">
                            <img class="border rounded shadow"
                                 src="https://www.renotalk.com/forum/uploads/monthly_2016_08/IMG_2852.JPG.47eff7ed99ead3b99c05615d4507145d.JPG"
                                 height="60" alt="">
                            <img class="border rounded shadow" height="60"
                                 src="https://www.sassymamasg.com/wp-content/uploads/2021/06/aircon-servicing-singapore-companies-contacts-1024x796.jpg"
                                 alt="">
                        </div>
                        <div class="mt-2">
                            空调外机有损坏, 建议检修
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <small class="float-end text-muted">李峰</small>
                        <span class="text-muted">12月12日 11:32:10</span> 沟通记录
                    </div>
                    <div class="card-body">
                        <div>
                            已经和客户确认上门时间为12点
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <small class="float-end text-muted">张先生</small>
                        <span class="text-muted">12月11日 12:32:10</span> 客户留言
                    </div>
                    <div class="card-body">
                        <div>
                            不好意思, 请在10点之后过来
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <small class="float-end text-muted">张先生</small>
                        <span class="text-muted">12月10日 14:22:10</span> 修改预约时间
                    </div>
                    <div class="card-body">
                        <div>
                            <span class="text-danger"><i class=" bi bi-calendar2-x"></i> 12月29日 周四 上午</span>
                            <i class="bi bi-arrow-right mx-3"></i>
                            <span class="text-success"><i class="bi bi-calendar-check"></i> 12月30日 周五 上午</span>
                        </div>
                        <div class="mt-2">
                            临时有事, 不好意思
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <small class="float-end text-muted">张先生</small>
                        <span class="text-muted">12月08日 14:22:10</span> 预约服务
                    </div>
                    <div class="card-body">
                        <div>
                            <i class="bi bi-geo"></i> 5855 W Century Blvd, Los Angeles - 90045
                            <i class="ms-3 bi bi-phone"></i> +65 8888 7777
                            <i class="ms-3 bi bi-calendar-check"></i> 12月29日 周四 上午
                            <i class="ms-3 bi bi-shop-window"></i> 空调清洗 - 4 台
                        </div>
                        <div class="mt-2">
                            需要高空作业, 请携带安全装备
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
