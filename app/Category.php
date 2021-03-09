<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ([
        'name'
    ]);

    public function applications()
    {
        return $this->hasMany(Application::class, 'category_id');
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::deleting(function ($category){
            $category->applications()->delete();
        });
    }
}