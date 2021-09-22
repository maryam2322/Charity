<?php

namespace App\Http\Controllers;

use App\Http\Middleware\checkPermission;
use App\Http\Requests\RoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index(){
        $permissions=Permission::all();
        return view('role.index',[
            'permissions'=>$permissions,
        ]);

}
    public function addnewRole(RoleRequest $request){
        $role=Role::query()->create($request->only('title'));
        $role->permissions()->attach($request->get('permission'));
        return redirect('/Role/show');
    }
    public function showRole(){
        $roles=Role::all();

        return view('role.show',[
            'roles'=>$roles,

        ]);
    }

}
