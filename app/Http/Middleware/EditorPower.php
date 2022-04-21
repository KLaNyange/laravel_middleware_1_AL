<?php

namespace App\Http\Middleware;

use App\Models\Article;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorPower
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
        $id = $request->route('article');
        $article = Article::find($id);
        if (Auth::check()  && Auth::user()->role_id == 4 && Auth::user()->id == $id->user_id || Auth::user()->role_id == 1) {
            return $next($request);
            // dd('alixe');
        } else {
            // dd($id);
            return redirect('/')->withErrors(['refused' => 'you cannot do that']);
        }

    }
}
