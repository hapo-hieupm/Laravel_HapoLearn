<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name', 'username', 'email', 'ava', 'password', 'role', 'description', 'experience', 'slack', 'facebook'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function feedbacks()
    {
        return $this->hasMany('App\Model\Feedback');
    }

    public function subreviews()
    {
        return $this->hasMany('App\Model\Subreview');
    }

    public function lessons()
    {
        return $this->belongstoMany('App\Model\Lesson');
    }

    public function courses()
    {
        return $this->belongstoMany('App\Model\Course');
    }
}
