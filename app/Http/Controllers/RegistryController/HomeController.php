<?php

namespace App\Http\Controllers\RegistryController; 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function ctrNavbar() {
        $curRoute = Route::currentRouteName();

        $data = ['routeCond' => false];
        if($curRoute == 'homeLogged') {
            $data = ['routeCond' => true];
        }

        return view('Home', $data);
    }

    
}