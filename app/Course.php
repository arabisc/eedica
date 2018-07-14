<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\File;

class Course extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
    'title', 'slug', 'description', 'price',
    'course_start', 'publish', 'user_id'
    ];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }

    public function scopePublish($query) {
      return $query->where('publish', '>', 0);
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('course_img')->singleFile();
    }
}
