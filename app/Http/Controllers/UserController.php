<?php

namespace App\Http\Controllers;

use App\Http\Middleware\checkPermission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $user=User::all();
        return view('users.index',[
            'user'=>$user,
        ]);
    }
    public function edit(User $user){
        $role=Role::all();
        return view('users.edit',[
            'user'=>$user,
            'role'=>$role,
        ]);
    }
    public function update(Request $request,User $user){
        $user->update([
            'role_id'=>$request->get('role_id'),
            'name'=>$request->get('name'),
            'lastname'=>$request->get('lastname'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
        ]);
        return redirect('/users');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect('/users');
    }
}
