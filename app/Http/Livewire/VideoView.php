<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VideoView extends Component
{
    public $video;
    public $videoView;

    public function mount($video, $videoView)
    {
        $this->video = $video;
        $this->videoView = $videoView;
    }
    public function updateSeconds($seconds)
    {
        $this->videoView->update([
            'seconds' => $seconds,
        ]);
    }
    public function markCompleted()
    {
        $this->videoView->update([
            'completed' => 1,
        ]);
    }
    public function render()
    {
        return view('livewire.video-view');
    }
}
