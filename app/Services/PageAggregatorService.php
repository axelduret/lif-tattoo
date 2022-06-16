<?php

namespace App\Services;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Repositories\MenuRepository;
use App\Repositories\PageRepository;

class PageAggregatorService
{
    /**
     * @param  string $name
     * @return Collection<Page,Menu>
     */
    public function get(string $name): Collection
    {
        $page = call_user_func(new PageRepository, $name);
        $menu = call_user_func(new MenuRepository);
        foreach ($menu as $key => $item) {
            if ($item->page->name === $page->name) {
                $page->title = Str::title($menu[$key]->title);
                $menu[$key]->active =  true;
            } else {
                $menu[$key]->active = false;
            }
        }
        return  collect(['page' => $page, 'menu' => $menu]);
    }
}
