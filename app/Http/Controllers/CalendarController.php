<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return view('calendar');
    }

    public function getEvents()
    {
        return [
            [
                'title' => 'サウナ',
                'description' => '人気の美容室予約取れた',
                'start' => '2021-09-10',
                'end'   => '2021-09-10',
            ],
            [
                'title' => 'サウナ',
                'description' => '人気の美容室予約取れた',
                'start' => '2021-09-16',
            ],
            [
                'title' => 'サウナ',
                'description' => '人気の美容室予約取れた',
                'start' => '2021-09-07',
            ],
            [
                'title' => 'サウナ',
                'description' => '人気の美容室予約取れた',
                'start' => '2021-09-14',
            ],
            [
                'title' => 'サウナ',
                'description' => '人気の旅館の予約が取れた',
                'start' => '2021-09-20',
                'url'   => 'https://juno-blog.site',
            ],
            [
                'title' => 'サウナ',
                'description' => '人気の旅館の予約が取れた',
                'start' => '2021-09-23',
                'url'   => 'https://juno-blog.site',
            ],
            [
                'title' => 'サウナ',
                'description' => '人気の旅館の予約が取れた',
                'start' => '2021-09-21',
                'url'   => 'https://juno-blog.site',
            ],
            [
                'title' => 'ワクチン接種',
                'start' => '2021-09-24',
                'color' => '#ff44cc',
            ],
        ];
    }
}
