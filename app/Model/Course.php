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

        if ($price == null) {
            $price = 'Free';
        } else {
            $price .= " $";
        }

        return $price;
    }

    public function getOtherCourseAttribute()
    {
        return $this->where('id', '!=', $this->id)
                    ->take(config('pagination.other_course'))->get();
    }

    public function getTagNameAttribute()
    {
        $tags = $this->tags;
        if (count($tags) > 0) {
            $tagName = '#' . $tags->first()->name;

            for ($i = 1; $i < count($tags); $i++) {
                $tagName .= ", " . '#' . $tags[$i]->name;
            }
        } else {
            $tagName = "#All";
        }

        return $tagName;
    }

    public function getNumOfUserAttribute()
    {
        $total = $this->users()->count();
        return $total;
    }

    public function getTotalTimeAttribute()
    {
        $time = $this->lessons()->sum('time');
        return $time;
    }

    public function isStudent()
    {
        return $this->users()->exsits(); 
    }
}
