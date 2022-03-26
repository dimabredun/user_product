<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;

class UserCrudService
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function read(int $id): ?User
    {
        return $this->repository->find($id);
    }
}