<?php

namespace App\Contracts\Abstracts\Services\Delete;

use App\Contracts\Interfaces\Services\CallMethodInterface;

abstract class DeleteService implements CallMethodInterface
{
    abstract protected function delete();

    public function callMethod(): void
    {
        $this->delete();
    }
}
