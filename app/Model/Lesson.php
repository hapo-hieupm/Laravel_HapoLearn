<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'course_id', 'description', 'requirement', 'time',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function media()
    {
        return $this->hasMany('App\Model\Media');
    }
}
