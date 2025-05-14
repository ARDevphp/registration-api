<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class Controller
{
    public function response($data, $code = null): JsonResponse
    {
        return response()->json([
            'data' => $data,
        ], $code);
    }

    public function success(string $message = null, $data = null, $code = null): JsonResponse
    {
        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => $message ?? 'operation successfull',
            'data' => $data,
        ], $code ?? 200);
    }
}
