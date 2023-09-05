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
        Language::create([
            'slug' => 'en',
            'title' => 'English'
        ]);
    }
}
