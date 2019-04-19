<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['id'];

    public function metroarea()
    {
        return $this->belongsTo(MetroArea::class);
    }

    public function state()
    {
        return $this->hasManyThrough(State::class, MetroArea::class);
    }
}
