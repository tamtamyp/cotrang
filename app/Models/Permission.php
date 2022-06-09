<?php

namespace App\Models;

class Permission extends BaseModel
{
    protected $guarded = ['id'];

    public static function getAllPermissions()
    {
        return self::all();
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
