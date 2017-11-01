<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta data-config="soundcloud" data-json="{{ json_encode($soundcloud) }}">

    <title>{{ Config::get('background.logo.text') }}</title>

    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<body>

<div id="video-overlay"></div>
<div id="video-full"></div>

<div class="logo-block">
    <div class="logo" style="font-family: '{{ Config::get('background.logo.font') }}'">
        {{ Config::get('background.logo.text') }}
    </div>

    <nav class="nav">
        @foreach ($menu as $media => $url)
            <a class="nav-link" href="{{ $url }}"><i class="fa fa-{{ $media }}"></i></a>
        @endforeach
    </nav>
</div>

<footer class="footer">
    <div class="inner">
        <p>© ANDERSSON ANDRE ONLINE AB 2017 (AAO)<a href="https://www.allabolag.se/5590541131/andersson-andre-online-ab">559054-1131</a>.</p>
    </div>
</footer>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>