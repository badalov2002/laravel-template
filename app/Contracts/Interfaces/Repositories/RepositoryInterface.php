<?php

namespace App\Contracts\Interfaces\Repositories;

interface RepositoryInterface
{
    public function getAll();

    public function getOne();
}
