<?php

namespace App\Traits\Livewire\Models\Features\Languages;

trait ColumnsTrait
{
    public array $columns = [
        'id' => [
            'sort' => [
                'active' => false,
            ],
            'method' => [
                'active' => false,
                'name' => null,
                'braces' => null
            ]
        ],
        'slug' => [
            'sort' => [
                'active' => false,
            ],
            'method' => [
                'active' => false,
                'name' => null,
                'braces' => null
            ]
        ],
        'title' => [
            'sort' => [
                'active' => false,
            ],
            'method' => [
                'active' => false,
                'name' => null,
                'braces' => null
            ]
        ],
        'thumbnail' => [
            'sort' => [
                'active' => false,
            ],
            'method' => [
                'active' => false,
                'name' => null,
                'braces' => null
            ]
        ],
        'created_at' => [
            'sort' => [
                'active' => false,
            ],
            'method' => [
                'active' => false,
                'name' => null,
                'braces' => null
            ]
        ],
    ];


}
