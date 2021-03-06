<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subreview extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'feedback_id', 'comment',
    ];
    protected $dates = [
        'deleted_at'
    ];
}
