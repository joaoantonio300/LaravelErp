<?php

namespace App\Services;

use App\DTOs\UserDTO;
use App\Models\User;

class UserService
{
    public function create(UserDTO $dto): User
    {
        return User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
        ]);
    }
}
