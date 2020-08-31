<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseUser extends Model
{
    use SoftDeletes;

    protected $filleable = [
        'course_id', 'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}
