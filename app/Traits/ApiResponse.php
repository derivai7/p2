<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    protected function apiSuccess($data, $code = 200, $message = null): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'message' => $message
        ], $code);
    }

    protected function apiError($errors, $code = 200, $message = null): JsonResponse
    {
        return response()->json([
            'errors' => $errors,
            'message' => $message
        ], $code);
    }
}
