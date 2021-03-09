<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'name'
        ];
    public $timestamps = false;
    public function applications(){
        return $this->hasMany(Application::class, 'status_id');
    }
}
