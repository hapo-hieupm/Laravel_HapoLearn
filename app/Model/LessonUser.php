<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LessonUser extends Model
{
    use SoftDeletes;

    protected $filleable = [
        'lesson_id', 'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}
