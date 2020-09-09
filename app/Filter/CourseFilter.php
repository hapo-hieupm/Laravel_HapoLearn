<?php

namespace App\Filter;

class CourseFilter extends QueryFilter
{
    public function keyword($value)
    {
        if ($value == null) {
            return $this->builder->get();
        }
        return  $this->builder->where('name', 'like', "{$value}%")
                              ->orwhere('description', 'like', "{$value}%");
    }
    
    public function createTime($order)
    {
        return $this->builder->orderBy('create_at', $order);
    }
}
