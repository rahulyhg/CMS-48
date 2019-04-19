<?php

namespace App\Models;

use App\MetroArea;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = ['id'];

    public function metroarea()
    {
        return $this->hasMany(MetroArea::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, MetroArea::class);
    }
}
