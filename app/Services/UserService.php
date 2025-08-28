<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\DTOs\UserDTO;
class UserService
{

     public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(UserDTO $dto)
    {
        $dto->password = bcrypt($dto->password);

        return $this->repository->create($dto);
    }
}
