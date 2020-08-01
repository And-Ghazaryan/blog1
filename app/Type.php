<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
