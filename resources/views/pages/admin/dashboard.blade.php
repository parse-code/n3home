@extends('layouts.app')

@php
    $weekday_today = date('w');
    if ($weekday_today ==0) {
        $weekday_today = 7;
    }
    $days = pad_day(date('Y-m-d', strtotime('-'.($weekday_today-1).' days')), date('Y-m-d', strtotime('+'.(7 - $weekday_today).' days')));
@endphp

@section('content')
    <div class="container">
        <div class="mb-3">
            <a-button-group>
                <a-button>
                    <icon-left></icon-left>
                    上周
                </a-button>
                <a-button>
                    下周
                    <icon-right></icon-right>
                </a-button>
                <a-button>今天</a-button>
                <a-week-picker class="ms-2"></a-week-picker>
            </a-button-group>

            <div class="float-end">
                <a-button target="_blank" href="{{route('create-appointment ')}}">
                    <i class="bi bi-plus"></i> 添加预约
                </a-button>
                <a-button><i class="bi bi-filter"></i></a-button>
            </div>
        </div>
        <table class="table table-bordered bg-white">
            <thead>
            <th style="width: 30px !important;"></th>
            @foreach($days as $date)
                <th v-on:click="showMap" class="hover-box cursor-point ">
                    {{$date}}
                    <span class="hover-item"><icon-location></icon-location></span>
                    <div class="float-end">
                        {{get_week_label($date)}}
                    </div>
                </th>
            @endforeach
            </thead>
            <tbody>
            <tr>
                <td class="vertical-middle">上午</td>
                <td class="hover-box">
                    <div class="card mb-2 border border-2 border-success" role="button"
                         onclick="location.href='/admin/appointment'">
                        <div class="card-body p-1 px-2">
                            <div class="float-end ">
                                <img class="rounded-circle border"
                                     src="https://avatars.dicebear.com/api/open-peeps/jason.jpg" width="24"
                                     height="24" alt="">
                                <img class="rounded-circle border" style="margin-left: -10px;"
                                     src="https://avatars.dicebear.com/api/open-peeps/max.jpg" width="24"
                                     height="24" alt="">
                            </div>
                            <div>
                                李女士 <label for="" class="badge bg-info">空调清洗 2台</label>
                            </div>
                            <div>
                                <small> <i class="bi-geo"></i>12 Tai seng, 351234</small>
                            </div>
                        </div>
                    </div>
                    <small type="button" v-on:click="showMap" class="hover-item">
                        <icon-location></icon-location>
                        在地图查看</small>
                </td>
                <td class="hover-box">
                    <div class="card mb-2" role="button" onclick="location.href='/admin/appointment'">
                        <div class="card-body p-1 px-2">
                            <div class="float-end ">
                                <img class="rounded-circle border"
                                     src="https://avatars.dicebear.com/api/open-peeps/alex.jpg" width="24"
                                     height="24" alt="">
                                <img class="rounded-circle border" style="margin-left: -10px;"
                                     src="https://avatars.dicebear.com/api/open-peeps/jason.jpg" width="24"
                                     height="24" alt="">
                            </div>
                            <div>
                                张先生 <label for="" class="badge bg-info">空调清洗 4台</label>
                            </div>
                            <div>
                                <small> <i class="bi-geo"></i>38 Ipon ln, 438646</small>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2" role="button" onclick="location.href='/admin/appointment'">
                        <div class="card-body p-1 px-2">
                            <div class="float-end ">
                                <img class="rounded-circle border"
                                     src="https://avatars.dicebear.com/api/open-peeps/lily.jpg" width="24"
                                     height="24" alt="">
                                <img class="rounded-circle border" style="margin-left: -10px;"
                                     src="https://avatars.dicebear.com/api/open-peeps/lucy.jpg" width="24"
                                     height="24" alt="">
                            </div>
                            <div>
                                王先生 <label for="" class="badge bg-info">空调清洗 2台</label>
                            </div>
                            <div>
                                <small> <i class="bi-geo"></i>12 Seding Road, 123451</small>
                            </div>
                        </div>
                    </div>
                    <small type="button" v-on:click="showMap" class="hover-item">
                        <icon-location></icon-location>
                        在地图查看</small>
                </td>
                <td class="disabled text-center vertical-middle">
                    <small class="text-muted">团建</small>
                </td>
                <td></td>
                <td class="disabled text-center vertical-middle">
                    <small class="text-muted">公共假期</small>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="vertical-middle">下午</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="disabled text-center vertical-middle">
                    <small class="text-muted">公共假期</small>
                </td>
                <td class="hover-box">
                    <div class="card mb-2" role="button" onclick="location.href='/admin/appointment'">
                        <div class="card-body p-1 px-2">
                            <div class="float-end ">
                                <img class="rounded-circle border"
                                     src="https://avatars.dicebear.com/api/open-peeps/max.jpg" width="24"
                                     height="24" alt="">
                                <img class="rounded-circle border" style="margin-left: -10px;"
                                     src="https://avatars.dicebear.com/api/open-peeps/alex.jpg" width="24"
                                     height="24" alt="">
                                <img class="rounded-circle border" style="margin-left: -10px;"
                                     src="https://avatars.dicebear.com/api/open-peeps/jason.jpg" width="24"
                                     height="24" alt="">
                            </div>
                            <div>
                                <span class="text-warning">先锋科技</span> <label for="" class="badge bg-info">空调清洗+充气 12台</label>
                            </div>
                            <div>
                                <small> <i class="bi-geo"></i>12 Kallang pudding road, 221235</small>
                            </div>
                        </div>
                    </div>
                    <small type="button" v-on:click="showMap" class="hover-item">
                        <icon-location></icon-location>
                        在地图查看</small>
                </td>
                <td class="hover-box text-center vertical-middle">
                    <a-button class="hover-item">
                        <template #icon>
                            <icon-plus></icon-plus>
                        </template>
                        添加预约
                    </a-button>
                    <a-button class="hover-item">
                        <template #icon>
                            <icon-stop></icon-stop>
                        </template>

                        禁用日期
                    </a-button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <a-modal v-model:visible="map_visible" fullscreen width="auto">
        <template #title>
            2022年12月30日 周五 3个预约
        </template>
        <img src="{{asset('images/map.jpg')}}" style="width: 100%;" alt="">
    </a-modal>
@endsection
@push('scripts')
    <script>
        Vue.createApp({
            data: function () {
                return {
                    map_visible: false
                }
            },
            methods: {
                showMap: function () {
                    this.map_visible = true;
                }
            }
        }).use(ArcoVue).use(ArcoVueIcon).mount('#app');
    </script>
@endpush
@push('styles')
    <style>
        .vertical-middle {
            vertical-align: middle;
        }

        .arco-modal-body {
            padding: 0;
        }

        .cursor-point {
            cursor: pointer;
        }

        table {
            table-layout: fixed;
        }

        .hover-box .hover-item {
            opacity: 0;
        }

        .hover-box:hover .hover-item {
            opacity: 1;
        }

        td.disabled {
            background: repeating-linear-gradient(
                -45deg,
                #eee,
                #eee 5px,
                #eaeaea 5px,
                #eaeaea 10px
            );
        }
    </style>
@endpush
