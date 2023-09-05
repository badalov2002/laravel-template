<?php

namespace App\Contracts\Abstracts\Services\Edit;

use App\Contracts\Interfaces\Services\CallMethodInterface;

abstract class EditService implements CallMethodInterface
{
    abstract protected function edit();

    public function callMethod(): void
    {
        $this->edit();
    }
}
