@extends('layouts.app')

@section('content')
    <div class="container">
        <a-card>
            <template #title>
                张先生
                <a-space>
                    <a-tag color="blue">
                        <template #icon><i class="bi bi-shop-window"></i></template>
                        空调清洗 - 4 台
                    </a-tag>
                    <a-tag color="purple">
                        <template #icon>
                            <i class="bi bi-calendar-check"></i>
                        </template>
                        12月30日 周五 上午
                    </a-tag>
                </a-space>
            </template>
            <template #extra>
                <div>
                    <a-space>
                        <a-button type="primary" status="success">
                            <template #icon>
                                <i class="bi bi-check"></i>
                            </template>
                            服务完成
                        </a-button>
                        <a-button>
                            <template #icon>
                                <i class="bi bi-calendar"></i>
                            </template>
                            修改时间
                        </a-button>
                        <a-button type="dashed">
                            <template #icon>
                                <i class="bi bi-chat"></i>
                            </template>
                            沟通记录
                        </a-button>
                        <a-dropdown>
                            <a-button>
                                <template #icon>
                                    <i class="bi bi-three-dots-vertical"></i>
                                </template>
                            </a-button>
                            <template #content>
                                <a-doption>编辑</a-doption>
                                <a-divider/>
                                <a-doption>删除</a-doption>
                            </template>
                        </a-dropdown>
                    </a-space>
                </div>
            </template>
            <div>
                <i class="bi bi-geo"></i> 5855 W Century Blvd, Los Angeles - 90045 (15km, 23 分钟)
                <i class="ms-3 bi bi-phone"></i> +65 8888 7777
            </div>

            <a-timeline labelPosition="relative">
                <a-timeline-item label="2012-08">
                    <div> 客户评价 </div>
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
                </a-timeline-item>
            </a-timeline>

            <div>
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
        </a-card>
    </div>
@endsection

@push('scripts')
    <script>
        Vue.createApp({}).use(ArcoVue).mount('#app');
    </script>
@endpush
