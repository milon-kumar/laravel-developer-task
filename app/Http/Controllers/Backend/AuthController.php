<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register()
    {
        return view('backend.auth.register');
    }

    public function registerStore(Request $request)
    {
        $data = $this->validate($request,[
           'name'       => 'required',
           'email'      => 'required|email|unique:users',
           'password'   => 'required|min:6',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        if ($user){
            toast('Registration Successfully','success');
            auth()->login($user);
            return redirect()->route('dashboard');
        }else{
            toast('Registration Failed','error');
            return redirect()->back();
        }
    }

    public function login()
    {
        return view('backend.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $this->validate($request,[
            'email'      => 'required|email',
            'password'   => 'required',
        ]);

        $credential = $request->only(['email','password']);
        if (auth()->attempt($credential)){
            return redirect()->route('dashboard');
        }else{
            toast('Invalid Credentials','error');
            return redirect()->back();
        }
    }

    public function forgotPassword()
    {
        return view('backend.auth.forgot_password');
    }

    public function forgotPasswordSend(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
        ]);

        $user = User::where('email',$request->email)->first();

        if ($user){
            Mail::to($user)->send(new ForgotPassword($user));
            return redirect()->route('forgot_password.feedback');
        }else{
            toast( "User Doesn't Exist",'error');
            return redirect()->back();
        }
    }

    public function forgotPasswordFeedback()
    {
        return view('backend.auth.feedback');
    }

    public function resetPassword(Request $request)
    {
        $email =  base64_decode($request->input('_token'));
        if ($email){
            $user = User::where('email',$email)->first();
            if ($user){
                return view('backend.auth.reset_password',['user'=>$user]);
            }else{
                toast("This Email Doesn't Exist",'warning');
                return redirect()->route('home');
            }
        }else{
            toast('Invalid Request','warning');
            return redirect()->route('home');
        }
    }

    public function passwordChange(Request $request)
    {
        $this->validate($request, [
            'password'              => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        $user = User::where('email',$request->email)->first();
        $user->update([
            'password'  => Hash::make($request->password),
        ]);
        toast('Your Password Change Successful','success');
        return redirect()->route('login');
    }

    public function logout()
    {
        auth()->logout();
        toast('Logout Successful','success');
        return redirect()->route('home');
    }
}
