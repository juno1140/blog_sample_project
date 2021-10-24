<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel × LINE Messaging API</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
                <h3>LINE Messaging API</h3>
                @if (session('status'))
                    <div class="alert alert-success m-0 text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('line_message.send_message') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="message" class="form-label">メッセージ</label>
                        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">送信</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
