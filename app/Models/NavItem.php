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

    // After a page is created NavItem active is set to True

    public function toggleActive()
    {
        $this->active = 1 - $this->active;
        $this->save();
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'navitem_id');
    }

    public function parentNav()
    {
        return $this->belongsTo(NavItem::class, 'parent_id');
    }
}
