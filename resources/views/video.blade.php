<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div style="width: 100%; text-align: center; padding-top: 90px; font-size: 20px;">
    <div id="our-video"></div>

    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
        var options = {
            id: {{$video->vimeo_id}},
            width: 640,
            loop: true
        };

        var player = new Vimeo.Player('our-video', options);

        player.setVolume(0);

        player.on('play', function() {
            console.log('played the video!');
        });
    </script>
</div>
</body>
</html>
