<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel × FullCalendar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Script -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <div class="m-auto w-50 m-5 p-5">
                <div id='calendar'></div>
            </div>
        </div>

        <link href='{{ asset('fullcalendar-5.9.0/lib/main.css') }}' rel='stylesheet' />
        <script src='{{ asset('fullcalendar-5.9.0/lib/main.js') }}'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'ja',
                    height: 'auto',
                    firstDay: 1,
                    headerToolbar: {
                        left: "dayGridMonth,listMonth",
                        center: "title",
                        right: "today prev,next"
                    },
                    buttonText: {
                        today: '今月',
                        month: '月',
                        list: 'リスト'
                    },
                    noEventsContent: '案件はありません',
                    // eventDisplay: 'block',
                    eventSources: [
                        {
                            url: '/get_events',
                        },
                    ],
                    eventSourceFailure () {
                        console.error('エラーが発生しました。');
                    },
                    eventMouseEnter (info) {
                        $(info.el).popover({
                            title: info.event.title,
                            content: info.event.extendedProps.description,
                            trigger: 'hover',
                            placement: 'top',
                            container: 'body',
                            html: true
                        });
                    }
                });
                calendar.render();
            });
        </script>
{{--        <style>--}}
{{--            .fc-col-header-cell-cushion,--}}
{{--            .fc-daygrid-day-number,--}}
{{--            .fc-daygrid-day-top{--}}
{{--                color: #333;--}}
{{--            }--}}
{{--            .fc-day-sat{--}}
{{--                background-color: #cce3f6;--}}
{{--            }--}}
{{--            .fc-day-sun{--}}
{{--                background-color: #f4d0df;--}}
{{--            }--}}
{{--        </style>--}}
    </body>
</html>
