<?php

namespace App\Http\Middleware;

use Closure;

/* {{snippet:begin_class}} */

class AdminLTEMiddleware
{

	/* {{snippet:begin_properties}} */

	/* {{snippet:end_properties}} */

	/* {{snippet:begin_methods}} */

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* {{snippet:begin_handle_method}} */

        return $next($request);

        /* {{snippet:end_handle_method}} */
    }

    /* {{snippet:end_methods}} */
}

/* {{snippet:end_class}} */