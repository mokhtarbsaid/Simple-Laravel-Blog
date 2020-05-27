<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Tag;
class CheckTag
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
        $count = Tag::all()->count();
        if ($count==0) {
            return redirect(route('tags.create'))->with(['error'=>'You Need to Create at Least One Tag Before Create New Post']);
        }
        return $next($request);
    }
}
