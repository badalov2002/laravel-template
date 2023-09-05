<?php

namespace App\Contracts\Abstracts\Services\Create;

use App\Contracts\Interfaces\Services\CallMethodInterface;

abstract class CreateService implements CallMethodInterface
{
    abstract protected function create();

    public function callMethod(): void
    {
        $this->create();
    }
}
