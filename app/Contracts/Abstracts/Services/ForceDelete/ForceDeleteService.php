<?php

namespace App\Contracts\Abstracts\Services\ForceDelete;

use App\Contracts\Interfaces\Services\CallMethodInterface;

abstract class ForceDeleteService implements CallMethodInterface
{
    abstract protected function forceDelete();

    public function callMethod(): void
    {
        $this->forceDelete();
    }
}
