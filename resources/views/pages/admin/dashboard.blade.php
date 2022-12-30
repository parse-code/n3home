@extends('layouts.app')

@php
    $weekday_today = date('w');
    $days = pad_day(date('Y-m-d', strtotime('- '.($weekday_today-1).' days')), date('Y-m-d', strtotime('+ '.(5 - $weekday_today).' days')));
@endphp

@section('content')
    <div class="container">
        <div class="mb-3">
            <div class="btn-group" role="group">
                <button style="width: 80px;" class="btn btn-sm btn-outline-secondary"><i class="bi-arrow-left"></i> 上周</button>
                <button style="width: 80px;" class="btn btn-sm btn-outline-secondary">下周 <i class="bi-arrow-right"></i></button>
                <button style="width: 80px;" class="btn btn-sm btn-outline-secondary">今天</button>
                <button style="width: 100px;" class="ms-2 btn btn-sm btn-outline-secondary"><i class="bi bi-calendar-week"></i> 选择日期
                </button>
            </div>
            <div class="float-end">
                <a target="_blank" href="{{route('create-appointment ')}}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-plus"></i>  添加预约 </a>
                <button class="btn btn-sm btn-outline-secondary"><span><i class="bi bi-filter"></i></span></button>
            </div>
        </div>
        <table class="table table-bordered bg-white">
            <thead>
            <th></th>
            @foreach($days as $date)
                @if($date === date('Y-m-d'))
                    <th class="bg-light">{{$date}} 今天</th>
                @else
                    <th>{{$date}} {{get_week_label($date)}}</th>
                @endif
            @endforeach
            </thead>
            <tbody>
            <tr>
                <td style="vertical-align: middle;">上午</td>
                <td>
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
                                <small> <i class="bi-geo"></i>12 Tai seng, 351234
                                    <i class="bi-phone ms-2"></i>
                                    92331876 </small>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
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
                                <small> <i class="bi-geo"></i>38 Ipon ln, 438646 <i class="bi-phone ms-2"></i>
                                    88431266 </small>
                            </div>
                        </div>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="vertical-align: middle;">下午</td>
                <td></td>
                <td></td>
                <td></td>
                <td>
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
                                先锋科技有限公司 <label for="" class="badge bg-info">空调清洗+充气 12台</label>
                            </div>
                            <div>
                                <small> <i class="bi-geo"></i>12 Kallang pudding raod, 221235 <i
                                        class="bi-phone ms-2"></i>
                                    88431266 </small>
                            </div>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
