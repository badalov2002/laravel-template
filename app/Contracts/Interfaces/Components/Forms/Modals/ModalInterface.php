<?php

namespace App\Contracts\Interfaces\Components\Forms\Modals;

interface ModalInterface
{
    public function getSize();

    public function getButtons();

    public function getHeadTitle();
}
