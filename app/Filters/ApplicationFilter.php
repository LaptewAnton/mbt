<?php

namespace App\Filters;

class ApplicationFilter extends QueryFilter
{
    public function category($id)
    {
        return $this->builder->where('category_id', $id);
    }

    public function status($id)
    {
        return $this->builder->where('status_id', $id);
    }
}
