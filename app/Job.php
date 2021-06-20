<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    protected $fillable = ['name', 'description','user_id'];

    public function report() 
    {
        return $this->hasMany('App\Report');
    }
}
