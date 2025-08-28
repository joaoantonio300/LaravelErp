<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\DTOs\UserDTO;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(private UserService $userService) {}

    public function store(StoreUserRequest $request)
    {
        $dto = UserDTO::fromArray($request->validated());
        $user = $this->userService->create($dto);

        return response()->json($user, 201);
    }
}
