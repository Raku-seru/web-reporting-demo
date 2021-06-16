<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "reports";
    protected $fillable = ['status','remarks','imageurl_1','imageurl_2','imageurl_3','imageurl_4','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
