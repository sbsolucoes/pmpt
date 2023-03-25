<?php

namespace App\Http\Middleware;

use App\Enuns\DocumentosEnum;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckAtosType
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!in_array($request->route('ato'), DocumentosEnum::onlyDocuments()))
        {
            abort(404);
        }
        return $next($request);
    }
}
