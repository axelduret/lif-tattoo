<?php

namespace App\Repositories;

use App\Models\Page;

class MenuRepository
{
    public function __invoke(): array
    {
        try {
            $pages = Page::select('title', 'name', 'path', 'weight')->orderBY('weight')->get();
            $menu = [];
            foreach ($pages as $page) {
                $menu[] = [
                    'title' => $page->title,
                    'name' => $page->name,
                    'path' => $page->path,
                    'weight' => $page->weight
                ];
            }
            return $menu;
        } catch (\Throwable $e) {
        }
    }
}
