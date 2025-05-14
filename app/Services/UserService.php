<?php

namespace App\Services;

use App\Repository\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function create(array $data)
    {
        return $this->userRepository->create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender']
        ]);
    }
}
