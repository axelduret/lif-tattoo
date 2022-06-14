<?php

namespace App\Repositories;

use App\Models\Page;

class PageRepository
{
    public function __invoke(string $name): Page
    {
        try {
            $page = Page::where('name', $name)->firstOrFail();
            $page->load([
                'images',
                'posts',
                'maps' => fn ($maps) => $maps->with(['map_layers']),
                'forms',
            ]);
            return $page;
        } catch (\Throwable $e) {
        }
    }
}
