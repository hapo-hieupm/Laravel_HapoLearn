<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'lesson_id', 'link',
    ];
    
    protected $dates = [
        'deleted_at'
    ];
}
