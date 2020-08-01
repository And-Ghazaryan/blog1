<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function items()
    {
        return $this->belongsTo('App\Item');
    }
}
