<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return $this->hasMany('App\Model\Lesson');
    }

    public function feedbacks()
    {
        return $this->hasMany('App\Model\Feedback');
    }

    public function tags()
    {
        return $this->belongstoMany('App\Model\Tag');
    }

    public function users()
    {
        return $this->belongstoMany('App\Model\User');
    }
}
