<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
