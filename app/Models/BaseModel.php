<?php

namespace App\Models;

use App\Helper\StoreCardHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use OwenIt\Auditing\Contracts\Auditable;

class BaseModel extends Model 
{
    use HasFactory;
    // use \OwenIt\Auditing\Auditable;

    public static function boot(){
        parent::boot();
        static::creating(function ($model) {
            if (Schema::hasColumn($model->getTable(), 'created_by')) {
                $user = Auth::user();
                if ($user) {
                    $model->created_by = $user->id;
                }
            }
            if (Schema::hasColumn($model->getTable(), 'updated_by')) {
                if ($user) {
                    $model->updated_by = $user->id;
                }
            }
            if (Schema::hasColumn($model->getTable(), 'log_history')) {
                if ($user) {
                    $model->log_history = date('Y-m-d H:i:s'). ' - Created By: '. StoreCardHelper::stripText($user->name);
                }
            }
            if (Schema::hasColumn($model->getTable(), 'created_time')) {
                $model->created_time = date('Y-m-d H:i:s');
            }
            if (Schema::hasColumn($model->getTable(), 'updated_time')) {
                $model->updated_time = date('Y-m-d H:i:s');
            }
        });
        static::updating(function ($model) {
            $user = Auth::user();
            if (Schema::hasColumn($model->getTable(), 'updated_by')) {
                if ($user) {
                    $model->updated_by = $user->id;
                }
            }
            if (Schema::hasColumn($model->getTable(), 'log_history')) {
                if ($user) {
                    $model->log_history = $model->log_history." <br/> ".date('Y-m-d H:i:s'). " - Updated By : ". StoreCardHelper::stripText($user->name);
                }
            }
            if (Schema::hasColumn($model->getTable(), 'updated_time')) {
                $model->updated_time = date('Y-m-d H:i:s');
            }
        });
    }

    public function getCreatedUserName(){
        $admin = User::query()->where('id', $this->created_by)->first();
        if ($admin) {
            return $admin->name;
        }
        return '';
    }

    public function getUpdatedUserName(){
        $admin = User::query()->where('id', $this->updated_by)->first();
        if ($admin) {
            return $admin->name;
        }
        return '';
    }
}
