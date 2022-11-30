<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name', 'intro', 'content', 'slug', 'user_id'
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('blog-cover')
            ->singleFile();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
