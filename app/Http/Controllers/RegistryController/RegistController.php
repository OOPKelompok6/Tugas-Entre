<?php

namespace App\Http\Controllers\RegistryController; 

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class RegistController extends Controller {
    public function showRegistry() {
        $curRoute = Route::currentRouteName();

        $data = [
            'mainOpacR' => '',
            'mainOpacL' => 'opacity-50',
            'bannerCond' => 'Sign Up',
            'logOrReg' => 'Sign Up ',
            'routeCond' => false
        ];        
        if($curRoute == 'login') {
            $data = [
                'mainOpacR' => 'opacity-50',
                'mainOpacL' => '',
                'bannerCond' => 'Log In',
                'logOrReg' => 'Log In ',
                'routeCond' => true
            ];
        }

        return view('Register', $data);
    }

    public function accountHandling(Request $request) {
        $curRoute = Route::currentRouteName();
        if($curRoute == 'loginSubmit') {
            $validatedData = $request->validate([
                'email' => 'required|email|exists:users,email',
                'password' => 'required'
            ]);

            if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
                Session::put('key', 'value');
                return redirect()->route('homeLogged'); 
            } else {
                return redirect()->back()->withErrors(['login' => 'Invalid credentials'])->withInput();
            }
        }
        else if($curRoute == 'registSubmit') {
            $validatedData = $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            $user = new User();
            $user->firstName = $validatedData['firstName'];
            $user->lastName = $validatedData['lastName'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->save(); 

            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); 
    }
}