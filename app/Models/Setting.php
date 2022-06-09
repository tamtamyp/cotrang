<?php

namespace App\Models;

class Setting extends BaseModel
{
    protected $guarded = ['id'];

    public static function getAllSettings()
    {
        return self::all();
    }

    public static function getSettingsArray()
    {
        return self::getAllSettings()->pluck('value', 'name')->toArray();
    }

    public static function has($key)
    {
        return (boolean)self::getAllSettings()->whereStrict('name', $key)->count();
    }

    public static function get($key, $default = null)
    {
        if (self::has($key)) {
            $setting = self::getAllSettings()->where('name', $key)->first();

            return $setting->value;
        }

        return $default;
    }

    public static function add($key, $value)
    {
        if (self::has($key)) {
            return self::set($key, $value);
        }

        return self::create(['name' => $key, 'value' => $value]) ? $value : false;
    }

    public static function set($key, $value)
    {
        if ($setting = self::getAllSettings()->where('name', $key)->first()) {
            return $setting->update([
                'name' => $key,
                'value' => $value,]) ? $value : false;
        }

        return self::add($key, $value);
    }

    public static function updateSettings($data)
    {
        foreach ($data as $key => $value) {
            self::set($key, $value);
        }
    }

    public static function remove($key)
    {
        if (self::has($key)) {
            return self::whereName($key)->delete();
        }

        return false;
    }
}
