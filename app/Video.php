<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    public function views()
    {
        return $this->hasMany(View::class);
    }
}
