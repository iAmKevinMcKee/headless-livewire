<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div style="width: 100%; text-align: center; padding-top: 90px; font-size: 20px;">
    <h2>Let's Build a Screencasts Website</h2><br/>
        <div>Track where the user is in the video</div>
        <div>Record when the user completes the video</div>
    <br/>
    <br/>
    <br/>
    Video Model: {{$video}}
</div>
</body>
</html>
