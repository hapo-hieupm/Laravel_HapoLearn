<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
