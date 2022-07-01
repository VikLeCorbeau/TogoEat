<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnsureUserAsRole
{
    /**
     * Handle an incoming request.
     * added
     * Check if role of current user matches the $role variable.
     * version 0.1: check via users table the role of the current user.
     * version 0.2: check via pivot table the role of the current user.
     *
     * @version 0.2
     * @param   \Illuminate\Http\Request  $request
     * @param   \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param   string $role
     *  
     * @return  \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        //get role id in 'roles' table 
        $role_id = DB::table('roles')->where('role', $request->user()->role)->first()->id;
        //get user id via $request
        $user_id = $request->user()->id;

        //condition: a row with user_id AND role_id exists in 'role_user' table
        $condition = DB::table('role_user')->where('user_id', $user_id)->where('role_id', $role_id)->exists();

        if ($condition) {
            //return next request
            return $next($request);
        } else {
            //if not return a 403 error.    
            abort(403, 'Cannot open this page');
        }        
    }
}
