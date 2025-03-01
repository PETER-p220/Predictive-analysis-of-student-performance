<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    //

    public function homepage(){
        return view('homepage');
    }
    public function showRegistrationForm(){
        return view('auth.register');
    }
    public function store(Request $request){
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|',  // Password confirmation
    ]);

    // Create a new user instance
    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password')); // Hash the password
    $user->save();

    // Log the user in after registration
    Auth::login($user);

    // Redirect to the homepage
    return redirect()->route('homepage');
}

    public function editStudent(){
        $userEdit=User::all();
        return view('studentEdit',compact('userEdit'));
    }
    public function edit($id){
        $user=User::findOrFail($id);
        return view('studentUpdate',compact('user'));
    }
    public function update(Request $request,$id){
        $user=new User;
        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');
        $user->avatar=request('avatar');
        $user->save();

        return redirect('studentEdit');

    }
}
