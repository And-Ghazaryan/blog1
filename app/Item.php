<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function logo()
    {
        return $this->hasMany('App\Logo');
    }
}
