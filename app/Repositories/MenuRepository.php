<?php

namespace App\Repositories;

use App\Models\Menu;
use Illuminate\Support\Collection;

class MenuRepository
{
    public function __invoke(): Collection
    {
        try {
            $menu = Menu::orderBy('weight')->get();
            return $menu;
        } catch (\Throwable $e) {
        }
    }
}
