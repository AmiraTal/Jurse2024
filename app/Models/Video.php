<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'vpath',
        'title',
        'type',
        'order',
        'video_file'
    ];
}
