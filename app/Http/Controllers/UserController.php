<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

        // Show Register/Create Form
        public function create() {
            return view('users.signup');
        }

        // Create New User
        public function store(Request $request){
       
            $formFields=$request->validate(
                [
                    'name'=> 'required',
                    'email'=>['required','email', Rule::unique('users', 'email')],
                    'password'=>'required|confirmed|min:6',
                ]
                );
                // Hash Password
                $formFields['password'] = bcrypt($formFields['password']);

                // Create User
                $user = User::create($formFields);
        
                // Login
                 auth()->login($user);
                 $user = Auth::user();
                 return redirect('/dashboard/' . $user->id)->with('message', 'You are now logged in!');
          /*   if ($formFields['role'] == 'user') {
                return redirect('/user')->with('message', 'User created and logged in');
             }
            elseif($formFields['role'] == 'admin') {
                return redirect('/admin')->with('message', 'Admin created and logged in');
            } */
        }
        
        
        //Logout the user
        public function logout(Request $request){
            auth()->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect('/login')->with('message', 'You have been logged out!');
        }
    
    

    // Show Login Form
    public function login() {
        return view('users.login');
    }



  // Authenticate User
  public function authenticate(Request $request) {
    $formFields = $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required'
    ]);

    if(auth()->attempt($formFields)) {
        $request->session()->regenerate();
        $user = Auth::user();

        return redirect('/dashboard/' . $user->id)->with('message', 'You are now logged in!');
        
    }

    return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
}

    public function dashboard($userId) {
    $user = User::findOrFail($userId);

   
    if ($user->role == 'user') {
        return view('dashboards.user', compact('user'));
    } elseif ($user->role == 'admin') {
        return view('dashboards.admin', compact('user'));
    } else {
       
    }
}

public function userDashboard(Request $request) {
    // You can customize this method for the user dashboard
    return view('dashboards.user');
}

public function adminDashboard(Request $request) {
    // You can customize this method for the admin dashboard
    return view('dashboards.admin');
}
}
