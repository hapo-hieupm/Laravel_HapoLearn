<?php

namespace App\Filter;

class CourseFilter extends QueryFilter
{
    public  function keyword($value)
    {
        if ($value == NULL) {
            return $this->builder->get();
        }
        return  $this->builder->where('name' , 'like' , "{$value}%")
                              ->orwhere('description' , 'like' , "{$value}%");
    }
    
    public function create_time($order)
    {
        return $this->builder->orderBy('create_at', $order);
    }

    public function lesson($lesson)
    {
        //
    }
}
