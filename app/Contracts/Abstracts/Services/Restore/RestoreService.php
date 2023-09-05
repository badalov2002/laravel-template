<?php

namespace App\Contracts\Abstracts\Services\Restore;

use App\Contracts\Interfaces\Services\CallMethodInterface;

abstract class RestoreService implements CallMethodInterface
{
    abstract protected function restore();

    public function callMethod(): void
    {
        $this->restore();
    }
}
