<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Lesson;
use App\Model\Feedback;
use App\Model\Tag;
use App\Model\User;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'ava', 'description', 'price',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function tags()
    {
        return $this->belongstoMany(Tag::class);
    }

    public function users()
    {
        return $this->belongstoMany(User::class);
    }
}
