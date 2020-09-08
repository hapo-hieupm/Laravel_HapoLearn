<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Lesson;
use App\Model\Feedback;
use App\Model\Tag;
use App\Model\User;
use App\Filter\QueryFilter;

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

    public function scopeFilter($query, QueryFilter $filters)
    {
        return $filters->apply($query);
    }

    public function getNumOfLessonAttribute()
    {
        return $this->lessons()->count();
    }

    public function getPriceCourseAttribute()
    {
        $price = $this->price;

        if ($price == NULL) {
            $price = 'Free';
        } else {
            $price .= "$";
        }

        return $price;
    }

    public function getOtherCourseAttribute()
    {
        return $this->where('id', '!=', $this->id)->take(config('pagination.course'))->get();
    }
}
