<?php

namespace App\Http\Controllers;

use App\Http\Requests\bakupRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LogoutRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create(){
        return view('authenticate.login');
    }
    public function edit(Request $request){
         $user=User::query()->where('email',$request->get('email'))->first();
         return view('authenticate.editProfile',[
             'user'=>$user,
         ]);
    }
    public function login(LoginRequest $request){
         $user=User::query()->where('nationalCode',$request->nationalCode)->firstOrFail();
        if(Hash::check($request->get('password'),$user->password)){
             auth()->login($user);
            return redirect('/');
        }
        else{
            return back()->withErrors('password not matches');
        }

    }
    public function destroy(LogoutRequest $request){
      auth()->logout();
      return redirect('/');
    }
    public function forgotPass(){
        return view('authenticate.passwordBackUp');
    }
    public function backupPass(bakupRequest $request){
         $users=User::query()->where('email',$request->email)->firstOrFail();
         if($users){
             return view('authenticate.passwordBackUp',[
                 'users'=>$users
             ]);
         }
         else{
             return back()->withErrors('email not exit');
         }
         return redirect('/');
    }
}
