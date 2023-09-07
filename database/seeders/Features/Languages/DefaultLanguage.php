<?php

namespace Database\Seeders\Features\Languages;

use App\Models\Features\Languages\Language;
use Illuminate\Database\Seeder;

class DefaultLanguage extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'slug' => 'en',
                'title' => 'English'
            ],
            [
                'slug' => 'ru',
                'title' => 'Русский'
            ],
        ];

        foreach ($data as $item) {
            Language::create([
                'slug' => $item['slug'],
                'title' => $item['title']
            ]);
        }
    }
}
