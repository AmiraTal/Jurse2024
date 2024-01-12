<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeynoteSpeakers extends Model
{
    use HasFactory;

    protected $table = 'keynote_speakers';
    protected $fillable = ['firstname', 'lastname', 'description'];
}
