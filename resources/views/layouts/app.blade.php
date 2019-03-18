<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"
        href="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/31-slideshare-256.png"
    />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'LS_APP')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container text-center" style="padding: 20px;">
        @yield('content')
    </div>
</body>
</html>