<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name', 'user_id', 'intro', 'content', 'slug', 'date'
    ];

    protected $casts = [
        'date' => 'datetime:Y-m-d'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
