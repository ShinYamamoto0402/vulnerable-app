<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function create(array $attributes);
    public function search(string $name);
}
