<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetroArea extends Model
{
    protected $guarded = ['id'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
