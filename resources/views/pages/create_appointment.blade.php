@extends('layouts.guest')

@section('content')
    <div class="container">
        <a-card class="card mt-2" title="添加预约">
            <template #extra>
                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#loginModal">已有账号?
                    登录</a>
            </template>
            <div>
                <div class="row mb-3 g-2">
                    <div class="col-sm">
                        <label for="type" class="form-label">选择服务项目</label>
                        <div>
                            <a-select :style="{width:'320px'}" placeholder="选择服务项目 ...">
                                <a-option>空调清洗</a-option>
                                <a-option>空调清洗+充气</a-option>
                                <a-option>空调维修</a-option>
                            </a-select>
                        </div>
                    </div>
                    <div class="col-sm">
                        <label for="quantity" class="form-label">数量</label>
                        <div>
                            <a-input-number :min="1" :max="100" id="quantity"
                                            placeholder="数量"></a-input-number>
                        </div>
                    </div>
                    <div class="col-sm">
                        <label for="date" class="form-label">服务日期</label>
                        <div>
                            <a-date-picker/>
                        </div>
                    </div>
                    <div class="col-sm">
                        <label for="time" class="form-label">服务时间</label>
                        <div>
                            <a-select id="time" :style="{width:'320px'}" placeholder="选择服务时间 ...">
                                <a-option>上午</a-option>
                                <a-option>下午</a-option>
                            </a-select>
                        </div>
                    </div>
                </div>
                <hr class="dropdown-divider">
                <div class="mb-3 row g-2">
                    <div class="col-sm">
                        <label for="name" class="form-label">姓名</label>
                        <div>
                            <a-input type="text" id="name"></a-input>
                        </div>
                    </div>
                    <div class="col-sm">
                        <label for="email" class="form-label">Email</label>
                        <div>
                            <a-input type="email" id="email"></a-input>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 g-2">
                    <div class="col-sm">
                        <label for="address" class="form-label">服务地址</label>
                        <div>
                            <a-input type="text"  id="address"></a-input>
                        </div>
                    </div>
                    <div class="col-sm">
                        <label for="postcode" class="form-label">邮编</label>
                        <div>
                            <a-input type="text" id="postcode"></a-input>
                        </div>
                    </div>
                    <div class="col-sm">
                        <label for="phone" class="form-label">电话</label>
                        <div>
                            <a-input type="tel" id="phone"></a-input>
                        </div>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">备注</label>
                    <div>
                        <a-textarea id="address" placeholder="输入备注" :max-length="100" allow-clear auto-size
                                    show-word-limit/>
                    </div>
                </div>
                <a-button type="primary" data-bs-toggle="modal" data-bs-target="#exampleModal">提交预约</a-button>
            </div>
        </a-card>
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">登录</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">登录</button>
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

@push('scripts')
    <script>
        Vue.createApp({}).use(ArcoVue).mount('#app');
    </script>
@endpush
