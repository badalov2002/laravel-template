<?php

namespace App\Traits\Livewire\Models\Features\Languages;

trait ActionsTrait
{
    public array $actions = [
        'table' => [
            'edit' => [
                'target' => null,
                'style' => [
                    'color' => null,
                    'margin' => null,
                ],
                'modal' => [
                    'size' => null,
                    'buttons' => [
                        'edit' => [
                            'class' => 'bg-info text-white',
                            'target' => 'edit'
                        ]
                    ]
                ],
            ],
            'delete' => [
                'target' => null,
                'style' => [
                    'color' => null,
                    'margin' => null,
                ],
                'modal' => [
                    'size' => null,
                    'buttons' => [
                        'delete' => [
                            'class' => 'bg-pulse text-white',
                            'target' => 'delete'
                        ]
                    ]
                ],
            ],
        ],

        'filter' => [
            'create' => [
                'target' => 'create-language',
                'style' => [
                    'color' => null,
                    'margin' => null,
                ],
                'modal' => [
                    'size' => null,
                    'buttons' => [
                        'create' => [
                            'class' => 'bg-success text-white',
                            'target' => 'create'
                        ],
                    ]
                ]
            ],
        ]
    ];

    public function getActionsData($action) {
        return $this->actions[$action];
    }
}
