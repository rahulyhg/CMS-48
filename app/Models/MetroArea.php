<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetroArea extends Model
{
    protected $guarded = ['id'];

    public function states()
    {
        return $this->belongsTo(State::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
