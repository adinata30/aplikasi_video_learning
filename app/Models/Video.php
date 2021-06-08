<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $primaryKey = 'video_id';
    public function session()
    {
        return $this->belongsTo('App\Models\Session', 'video_id');
    }
}
