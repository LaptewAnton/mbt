<?php

namespace App;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Application extends Model
{
    protected $table = 'applications';

    protected $fillable = ([
        'title',
        'description',
        'category_id',
        'photo_before',
        'photo_after',
        'user_id',
        'status_id',
        'comment',
    ]);

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function scopeFilter(Builder $builder, QueryFilter $filters){
        return $filters->apply($builder);
    }
}
