<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavItem extends Model
{
    protected $guarded = ['id'];
    protected $table = 'navitems';
    public $timestamps = false;

    public static function getURI(string $str)
    {
        return '/' . str_replace(' ', '-', strtolower($str));
    }
}
