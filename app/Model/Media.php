<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
