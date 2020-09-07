<?php

namespace App;

class LessonFilters extends QueryFilter
{
    public function create_time($order)
    {
        return $this->builder->orderBy('create_at', $order);
    }

    public function lesson($lesson)
    {
        return $this->builder->orderBy('difficulty', $lesson);
    }
}