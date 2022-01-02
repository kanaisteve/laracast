<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /**
         * if user is a guest, display forbidden page.
         */
        // if(auth()->guest()) {
        //     abort(Response::HTTP_FORBIDDEN); // [or] abort(403);
        // }

        // if a user does not have a username of 'kanaitech', display a 403 (forbidden page) error (php 7.3.12)
        if (optional(auth()->user())->username !== 'kanaitech') {
            abort(Response::HTTP_FORBIDDEN);
        }

        /**
         * This code is applicable to php 8
         */
        // if(auth()->user()?->username !== 'kanaitech'){
        //     abort(Response::HTTP_FORBIDDEN);
        // }
        
        return $next($request);
    }
}
