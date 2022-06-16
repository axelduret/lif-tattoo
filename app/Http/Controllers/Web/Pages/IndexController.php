<?php

namespace App\Http\Controllers\Web\Pages;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;
use App\Services\PageAggregatorService;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(string $name): Response
    {
        $pageAggregator = (new PageAggregatorService)->get($name);
        return Inertia::render(
            Str::title($name),
            [
                'page' => $pageAggregator['page'],
                'links' => $pageAggregator['menu'],
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
