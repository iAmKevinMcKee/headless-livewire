<div>
    {{$videoView->seconds}}
</div>
@push('scripts')
<script>
    var options = {
        id: {{$video->vimeo_id}},
        width: 640,
        loop: false
    };

    var player = new Vimeo.Player('our-video', options);

    player.setVolume(0);
    player.setCurrentTime({{$videoView->seconds ?? 0}});

    player.on('timeupdate', function(data) {
        console.log(data.seconds);
        // passport
        // sanctum
        {{--axios.post('/api/seconds/{{$video->id}}/{{request()->user()->id}}', {--}}
        {{--    seconds: data.seconds,--}}
        {{--}).then(function (response) {--}}
        {{--    console.log(response);--}}
        {{--});--}}
        @this.call('updateSeconds', data.seconds);
    });

    player.on('ended', function(data) {
        @this.call('markCompleted');
    });

</script>
@endpush
