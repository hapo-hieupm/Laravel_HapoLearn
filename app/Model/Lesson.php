<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Media;

class Lesson extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'course_id', 'name', 'description', 'requirement', 'time',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
