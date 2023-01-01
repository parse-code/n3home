@extends('layouts.guest')

@section('content')
    <div class="container-mobile shadow-lg">
        <van-nav-bar title="嘉兴控股" :fixed="true" :placeholder="true">
            <template #right>
                <van-icon name="{{asset('images/avatar.png')}}" size="30"></van-icon>
            </template>
        </van-nav-bar>
        <van-grid :column-num="7" :border="false" class="bg-white">
            <van-grid-item text="13">
                <template #icon>
                    <div>日</div>
                </template>
            </van-grid-item>
            <van-grid-item text="14">
                <template #icon>
                    <div>一</div>
                </template>
            </van-grid-item>
            <van-grid-item text="15" class="active">
                <template #icon>
                    <div>二</div>
                </template>
            </van-grid-item>
            <van-grid-item text="16">
                <template #icon>
                    <div>三</div>
                </template>
            </van-grid-item>
            <van-grid-item text="17">
                <template #icon>
                    <div>四</div>
                </template>
            </van-grid-item>
            <van-grid-item text="18">
                <template #icon>
                    <div>五</div>
                </template>
            </van-grid-item>
            <van-grid-item text="19">
                <template #icon>
                    <div>六</div>
                </template>
            </van-grid-item>

        </van-grid>
        <div>
            <van-list>
                <template v-for="_time in [1,2]">
                    <van-cell-group :title="_time ===1?'上午':'下午'" >
                        <van-cell center v-for="item in list.filter(_item => _item.time ===_time)" v-on:click="onNameClick(item.id)">
                            <template #title>
                                <div>
                                    <span class="custom-title">@{{ item.name }}</span>
                                    <van-space>
                                        <van-tag plain>@{{ item.service }}</van-tag>
                                        <template v-if="item.status ==='finished'">
                                            <van-tag type="success">已完成</van-tag>
                                        </template>
                                    </van-space>
                                </div>
                            </template>
                            <template #right-icon>
                                <van-icon v-on:click.stop="callUser(item.mobile)"
                                          name="phone-circle" :color="item.contacted?'#aaaaaa':'#1989fa'"
                                          size="40"></van-icon>
                            </template>
                            <template #label>
                                <van-icon name="guide-o"></van-icon>
                                @{{ item.location.name }} - @{{item.location.distance}}
                            </template>
                        </van-cell>
                    </van-cell-group>
                </template>
            </van-list>
        </div>
        <van-action-sheet v-model:show="actionSheetShow"
                          :actions="actions" :description="description"
                          @select="onSelect" cancel-text="取消"
                          close-on-click-action/>
        <div class="van-safe-area-bottom"></div>
    </div>
@endsection

@push('scripts')
    <script>
        Vue.createApp({
            data() {
                return {
                    actionSheetShow: false,
                    selected: null,
                    description: '',
                    actions: [
                        {name: '服务完成', id: 1},
                        {name: '查看详情', id: 2},
                        {name: '地图导航', id: 3},
                        {name: '修改时间', id: 4},
                    ],
                    list: [
                        {
                            id: 1,
                            time: 1,
                            name: '张先生',
                            mobile: '+6588431266',
                            service: "空调清洗 - 4台",
                            status: 'finished',
                            contacted: true,
                            location: {
                                name: "38 ipoh ln, 438646",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '50 米'
                            }
                        },
                        {
                            id: 11,
                            time: 1,
                            name: '张先生',
                            mobile: '+6588431266',
                            service: "空调清洗 - 4台",
                            contacted: true,
                            location: {
                                name: "38 ipoh ln, 438646",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '50 米'
                            }
                        },
                        {
                            id: 2,
                            time: 2,
                            name: '李女士',
                            mobile: '+6587656789',
                            service: "空调清洗 - 2台",
                            contacted: false,
                            location: {
                                name: "8 Tai seng #12-10, 123098",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '3.2 公里'
                            }
                        },
                        {
                            id: 3,
                            time: 2,
                            name: '先锋科技',
                            contacted: false,
                            mobile: '+6587656789',
                            service: "空调清洗 - 12台",
                            location: {
                                name: "12 Kallang pudding road, 427238",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '1.2 公里'
                            }
                        },
                        {
                            id: 4,
                            time: 2,
                            name: '先锋科技',
                            contacted: false,
                            mobile: '+6587656789',
                            service: "空调清洗 - 12台",
                            location: {
                                name: "12 Kallang pudding road, 427238",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '1.2 公里'
                            }
                        }, {
                            id: 5,
                            time: 2,
                            name: '先锋科技',
                            contacted: false,
                            mobile: '+6587656789',
                            service: "空调清洗 - 12台",
                            location: {
                                name: "12 Kallang pudding road, 427238",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '1.2 公里'
                            }
                        },
                        {
                            id: 6,
                            time: 2,
                            name: '先锋科技',
                            contacted: false,
                            mobile: '+6587656789',
                            service: "空调清洗 - 12台",
                            location: {
                                name: "12 Kallang pudding road, 427238",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '1.2 公里'
                            }
                        },
                        {
                            id: 7,
                            time: 2,
                            name: '先锋科技',
                            contacted: false,
                            mobile: '+6587656789',
                            service: "空调清洗 - 12台",
                            location: {
                                name: "12 Kallang pudding road, 427238",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '1.2 公里'
                            }
                        },
                        {
                            id: 8,
                            time: 2,
                            name: '先锋科技',
                            contacted: false,
                            mobile: '+6587656789',
                            service: "空调清洗 - 12台",
                            location: {
                                name: "12 Kallang pudding road, 427238",
                                lat: 3.1233,
                                lng: 12.222,
                                distance: '1.2 公里'
                            }
                        }
                    ]
                }
            },
            methods: {
                onNameClick(id) {
                    this.selected = id;
                    for (let p in this.list) {
                        if (this.list[p].id === id) {
                            this.description = this.list[p].name + ' | ' + this.list[p].service;
                            break;
                        }
                    }
                    this.actionSheetShow = true;
                },
                callUser(mobile) {
                    vant.showConfirmDialog({message: '拨打电话: ' + mobile + '? '});
                },
                onSelect(index) {
                    vant.showDialog({message: index.id});
                },
                onLoad() {

                }
            }
        }).use(vant).mount('#app');
    </script>
@endpush

@push('styles')
    <style>
        .container-mobile {
            max-width: 1200px;
            margin: 0 auto;
        }

        .custom-title {
            margin-right: 4px;
            vertical-align: middle;
        }

        :root {
            --van-button-primary-background: red;
            --van-grid-item-content-padding: 5px;
            --van-grid-item-content-background: transparent;
        }

        .van-grid-item.active {
            background-color: #0c63e4;
            color: white;
        }

        .van-grid-item.active .van-grid-item__text {
            color: white;
        }
    </style>
@endpush
