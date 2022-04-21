<?php

namespace App\Http\Middleware;

use App\Models\Article;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheck
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
        // $id = $request->id;
        // $articles = Article::find($id);
        if (Auth::check() && Auth::user()->role_id == 1 || Auth::user()->role_id == 4 || Auth::user()->role_id == 3) {
            return $next($request);
        } else {
            return redirect('/')->withErrors(['refused' => "you cannot do that"]);
        }
    }
}
