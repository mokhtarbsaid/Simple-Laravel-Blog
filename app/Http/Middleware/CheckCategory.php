<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Category;
class CheckCategory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $count = Category::all()->count();
        if ($count==0) {
            return redirect(route('categories.create'))->with(['error'=>'You Need to Create at Least One Category Before Create New Post']);
        }
        return $next($request);
    }
}
