<?php

namespace App\Models\Features\Languages;

use App\Traits\Models\FileTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $slug
 * @property string $title
 * @property mixed $thumbnail
 */
class Language extends Model
{
    use HasFactory, SoftDeletes;
    use FileTrait;

    protected $fillable = [
        'slug',
        'title',
        'thumbnail',
    ];
}
