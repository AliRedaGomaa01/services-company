<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( $request->has('lang') ) {
            $lang = $request->lang;
            // check if lang is valid
            if ( !in_array( $lang , ['ar' , 'en'] ) ) {
                return abort(404); 
            }
            // save lang in session 
            session()->put('lang', $lang);
        }

        $lang = session()->get('lang', config('app.fallback_locale')) ; 
        
        app()->setLocale( $lang );
        
        return $next($request);
    }
}
