<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'lesson_content',
        'position', 'free_lesson', 'publish', 'course_id', 'type',
    ];

    protected $hidden = [];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function scopePublish($query) {
      return $query->where('publish', '>', 0);
    }
}
