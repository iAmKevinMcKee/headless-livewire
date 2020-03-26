<?php

namespace App\Http\Controllers;

use App\VideoView;
use Illuminate\Http\Request;

class VideoSecondsViewedController extends Controller
{
    public function store($video, $user)
    {
        $videoView = VideoView::firstOrCreate([
            'video_id' => $video,
            'user_id' => $user,
        ])->update([
            'seconds' => request()->seconds,
        ]);

        return response($videoView, 200);
    }
}
