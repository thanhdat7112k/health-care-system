<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class DBTransaction
{
    /**
     * Handle an incoming request.
     * @return mixed
     * @throws \Exception
     */
    public function handle(Request $request, Closure $next)
    {
        DB::beginTransaction();

        try {
            $response = $next($request);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        if (!$this->checkIfResponseSuccess($response)) {
            DB::rollBack();
        } else {
            DB::commit();
        }

        return $response;
    }

    protected function checkIfResponseSuccess($response)
    {

        if ($response instanceof RedirectResponse == false &&
            $response instanceof Response == false &&
            $response instanceof JsonResponse == false) {
            return false;
        }

        if ($response->getStatusCode() >= 400) {
            return false;
        }

        return true;
    }
}
