<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class CustomAuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required | min:5 | max:12',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $res = $user->save();

        if ($res) {
            return redirect('/registration')->with('success', 'You have registered successfully!');
        } else {
            return redirect('/registration')->with('fail', 'Something went wrong!');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('LoggedInUser', $user->id);
                return redirect('/dashboard');
            } else {
                return redirect('/login')->with('fail', 'Password does not match!');
            }
        } else {
            return redirect('/login')->with('fail', 'We do not recognize your email address!');
        }
    }

    public function dashboard()
    {
        $data = array();
        if (Session::has('LoggedInUser')) {
            $data = User::where('id', '=', Session::get('LoggedInUser'))->first();
        }
        return view('auth.dashboard',compact('data'));
    }

    public function logout(){
        if(Session::has('LoggedInUser')){
            Session::pull('LoggedInUser');
            return redirect('/login');
        }
    }
}
