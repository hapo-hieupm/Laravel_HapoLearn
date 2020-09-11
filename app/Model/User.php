<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Feedback;
use App\Model\Subreview;
use App\Model\Lesson;
use App\Model\Course;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    const ROLES = [
        'admin' => 0,
        'student' => 1,
    ];

    const ROLE_NAME = [
        'admin' => 'Admin',
        'student' => 'Student',
    ];  
    
    public function getRoleNameAttribute()
    {
        return self::ROLE_NAME[array_flip(self::ROLES)[$this->role]];
    }

    public function isAdmin()
    {
        return $this->role == self::ROLES['admin'];
    }

    public function isStudent()
    {
        return $this->role == self::ROLES['student'];
    }

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
        return $this->hasMany(Feedback::class);
    }

    public function subreviews()
    {
        return $this->hasMany(Subreview::class);
    }

    public function lessons()
    {
        return $this->belongstoMany(Lesson::class);
    }

    public function courses()
    {
        return $this->belongstoMany(Course::class);
    }
}
