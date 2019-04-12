<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = ['id'];

    public function metroarea()
    {
        return $this->hasMany(MetroArea::class);
    }
}
