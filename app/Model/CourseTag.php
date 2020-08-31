<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTag extends Model
{
    use SoftDeletes;

    protected $filleable = [
        'course_id', 'tag_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}
