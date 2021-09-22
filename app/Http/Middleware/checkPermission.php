<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;

class checkPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$parameter)
    {
       $permission=Permission::query()
           ->where('title',$parameter)->firstOrFail();
       if(  !auth()->user() ){
         return redirect('/login');
       }
       elseif ( ! auth()->user()->role->haspermission($permission)){
           abort(403);
       }
        return $next($request);
    }
}
