<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'courses_id', 'feedback', 'rating',
    ];
    
    protected $dates = [
        'deleted_at'
    ];

    public function subreviews()
    {
        return $this->hasMany('App\Model\Subreview');
    }
}
