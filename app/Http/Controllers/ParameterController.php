<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class ParameterController extends Controller
{
    // Prevent Other To Access These Routes
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Function return parameter view
    public function view()
    {
        return view('back.parameter');
    }
    // Function Edit Password

    public function editMyPassword(Request $request)
    {
        $request->validate([
            'password' => 'required||confirmed',
        ]);
        $user=User::findOrFail(auth()->user()->id);
        $user->password= Hash::make($request->password);
        $user->save();

        return redirect('/logOut');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
