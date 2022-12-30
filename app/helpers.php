<?php

if (!function_exists('get_week')) {
    function get_week($date = null)
    {
        if (empty($date)) {
            $date = 'now';
        }

        return date('w', strtotime($date));
    }
}

if (!function_exists('pad_day')) {
    function pad_day($start, $end = 'now')
    {
        $start = strtotime($start);
        $end   = strtotime($end);

        if ($end < $start) {
            return [];
        }

        $days = [date('Y-m-d', $start)];
        while ($start < $end) {
            $start  = strtotime('+1 day', $start);
            $days[] = date('Y-m-d', $start);
        }
        return $days;
    }
}

if (!function_exists('get_week_label')) {
    function get_week_label($date = null)
    {
        $week   = get_week($date);
        $labels = [
            '周日',
            '周一',
            '周二',
            '周三',
            '周四',
            '周五',
            '周六',
        ];

        return $labels[$week] ?? '未知';
    }
}

if (!function_exists('time_diff')) {

    function time_diff($begin_time, $end_time)
    {
        if (empty($begin_time) || empty($end_time)) {
            return '-';
        }

        $begin_time = strtotime($begin_time);
        $end_time   = strtotime($end_time);

        if ($begin_time < $end_time) {
            $starttime = $begin_time;
            $endtime   = $end_time;
        } else {
            $starttime = $end_time;
            $endtime   = $begin_time;
        }
        $timediff = $endtime - $starttime;
        $days     = intval($timediff / 86400);
        $remain   = $timediff % 86400;
        $hours    = intval($remain / 3600);
        $remain   = $remain % 3600;
        $mins     = intval($remain / 60);
        $seconds  = $remain;

        $time_diff_str = '';
        if ($days) {
            $time_diff_str .= $days . ' 天 ';
        }
        if ($hours) {
            $time_diff_str .= $hours . ' 小时 ';
        }
        if ($mins) {
            $time_diff_str .= $mins . ' 分钟 ';
        }

        if (empty($days) && empty($hours) && empty($mins)) {
            $time_diff_str .= $seconds . ' 秒钟';
        }

        return $time_diff_str;
    }
}
