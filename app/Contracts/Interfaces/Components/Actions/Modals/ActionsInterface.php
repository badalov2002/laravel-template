<?php

namespace App\Contracts\Interfaces\Components\Actions\Modals;

interface ActionsInterface
{
    public function getModalTarget();

    public function getModalProperties();

    public function getButtonProperties();
}
