<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return  view('project.elements.homePage.index');
    }
}
