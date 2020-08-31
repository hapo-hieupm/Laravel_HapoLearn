<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function tags()
    {
        return $this->belongstoMany('App\Model\Course');
    }
}
