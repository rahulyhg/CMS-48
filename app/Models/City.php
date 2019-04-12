<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['id'];

    public function metroarea()
    {
        return $this->belongsTo(MetroArea::class);
    }
}
