<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name'];
    public function group()
    {
        return $this->hasMany('App\Group');
    }
    public function lecture()
    {
       return $this->belongsTo('App\Lecture');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function teacher()
    {
        return $this->belongsTo('App\User');
    }
}
