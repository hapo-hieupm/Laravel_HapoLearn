<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Course;

class Tag extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function courses()
    {
        return $this->belongstoMany(Course::class);
    }
}
