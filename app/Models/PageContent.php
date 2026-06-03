<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = ['page', 'section', 'content', 'type'];

    public static function get(string $page, string $section, string $default = ''): string
    {
        $content = static::where('page', $page)->where('section', $section)->first();
        return $content && $content->content ? $content->content : $default;
    }

    public static function getPage(string $page): array
    {
        return static::where('page', $page)
            ->pluck('content', 'section')
            ->toArray();
    }
}
