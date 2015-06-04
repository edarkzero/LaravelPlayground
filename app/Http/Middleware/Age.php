<?php namespace App\Http\Middleware;

use Closure;

class Age {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if ($request->route('x') < 200)
        {
            return redirect('home');
        }

		return $next($request);
	}

}
