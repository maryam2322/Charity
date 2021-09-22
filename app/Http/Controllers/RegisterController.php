<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function create(){
       return view('authenticate.create');
   }
   public function store(Request $request){

       $normaluser=Role::query()->where('title','normal user')->first();
            $pass=$request->get('password');
            $repass=$request->get('repass');
            if($pass==$repass) {
                $user = User::query()->create([
                    'role_id' => $normaluser->id,
                    'name' => $request->get('name'),
                    'phone' => $request->get('phone'),
                    'nationalCode' => $request->get('nationalCode'),
                    'email' => $request->get('email'),
                    'password' => bcrypt($request->get('password')),
                ]);
                auth()->login($user);
                return redirect('/');
            }

   }
}
