<?php

namespace App\Models;

class Menu extends BaseModel
{

    protected $table = "menus";

    protected $fillable = [
        'name',
        'title',
        'location',
        'content',
        'created_at',
        'updated_at',
    ];

    public function scopeGetMenu()
    {
        return $this;
    }

    public function userCreated(){
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }
    
    public function userUpdated(){
        return $this->belongsTo('App\Models\User', 'updated_by', 'id');
    }

}
