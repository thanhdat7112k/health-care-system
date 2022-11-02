<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponse
{
    protected function apiSuccess($data = null)
    {
        return response()->json([
            'data' => $data,
        ], Response::HTTP_OK);
    }

    protected function apiError($message = null, $errorCode = Response::HTTP_BAD_REQUEST)
    {
        if(empty($message)){
            $message = trans('messages.server_error');
        }

        return response()->json([
            'message' => $message,
        ], $errorCode);
    }

    protected function apiUnauthorized($message = null)
    {
        if(empty($message)){
            $message = trans('messages.unauthorized');
        }

        return $this->apiError($message, Response::HTTP_UNAUTHORIZED);
    }

    protected function apiForbidden($message = null)
    {
        if(empty($message)){
            $message = trans('messages.forbidden');
        }

        return $this->apiError($message, Response::HTTP_FORBIDDEN);
    }
}
