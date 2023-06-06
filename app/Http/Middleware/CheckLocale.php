<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Http\Request;

class CheckLocale
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
        if(!$request->route('locale') && !session('lang')){
            session(['lang' => Language::defaultLang()->id]);
            session(['lang_prefix' => Language::defaultLang()->prefix]);

            app()->setLocale(session('lang_prefix'));

            return $next($request);
        }elseif (!$request->route('locale') && session('lang')){
            app()->setLocale(session('lang_prefix'));
            return $next($request);
        }

        $lang = Language::where(['prefix' => $request->route('locale'), 'active' => 1])->firstOrFail();

        if($lang){
            session(['lang' => $lang->id]);
            session(['lang_prefix' => $lang->prefix]);

            app()->setLocale(session('lang_prefix'));
        }

        return $next($request);
    }
}
