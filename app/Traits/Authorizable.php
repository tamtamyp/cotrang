<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

trait Authorizable
{

    /**
     * Override of callAction to perform the authorization before
     *
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public function callAction($method, $parameters){
        $user = Auth::user();
        if($user->isSystemAdmin()){
            return parent::callAction($method, $parameters);
        }
        $controller = substr(class_basename(Route::current()->controller), 0, -10);
        $slug = 'app.' . Str::slug($controller) . '.' . Str::slug($method);
        if ($user->hasPermission($slug)) {
            return parent::callAction($method, $parameters);
        } else {
            abort(403);
        }
    }
}
