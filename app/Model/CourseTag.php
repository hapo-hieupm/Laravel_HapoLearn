<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
