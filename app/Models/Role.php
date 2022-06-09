<?php

namespace App\Models;

class Role extends BaseModel
{
    protected $guarded = ['id'];

    public static function getAllRoles()
    {
        return self::withCount('permissions')->latest('id')->paginate(10);
    }

    public static function getForSelect()
    {
        return self::select('id', 'name')->latest('id')->get();
    }


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
