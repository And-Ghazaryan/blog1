<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function items()
    {
        return $this->hasOne('App\Item');
    }
}
