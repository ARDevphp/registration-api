<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequests;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function register(StoreUserRequests $requests)
    {
        $user = $this->userService->create($requests->all());

        return $this->response(['token' => $user->createToken('api_token')->plainTextToken], 201);
    }

    public function profile()
    {
        $user = auth()->user();

        return $this->response(['user' => $user], 200);
    }
}
