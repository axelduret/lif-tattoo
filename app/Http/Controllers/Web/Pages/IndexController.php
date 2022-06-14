<?php

namespace App\Http\Controllers\Web\Pages;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Repositories\MenuRepository;
use App\Repositories\PageRepository;

class IndexController extends Controller
{
    public function __invoke(string $name): Response
    {
        $pageRepository = call_user_func(new PageRepository, $name);
        $menuRepository = call_user_func(new MenuRepository);
        return Inertia::render(
            Str::title($name),
            [
                'page' => $pageRepository,
                'title' => Str::title($pageRepository->title),
                'links' => $menuRepository,
                'imagesCollection' => collect(
                    [
                        ['name' => 'tattoo_01', 'path' => 'tattoo_01.jpg', 'id' => 0],
                        ['name' => 'tattoo_02', 'path' => 'tattoo_02.jpg', 'id' => 1],
                        ['name' => 'tattoo_03', 'path' => 'tattoo_03.jpg', 'id' => 2],
                        ['name' => 'tattoo_04', 'path' => 'tattoo_04.jpg', 'id' => 3]
                    ]
                )
            ]
        );
    }
}
