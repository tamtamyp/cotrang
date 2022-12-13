<?php

namespace App\Models;

class MenuItem extends BaseModel
{
    protected $table = "menu_item";

    protected $guarded = ['id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function childs()
    {
        return $this->hasMany(MenuItem::class, 'parent_id', 'id')->orderBy('order', 'asc');
    }

    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id', 'id');
    }
}
