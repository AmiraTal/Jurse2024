<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organizers extends Model
{
    use HasFactory;

    protected $table = 'organizers';
    protected $fillable = ['slc', 'order'];
}
