<?php

namespace App\Http\Controllers\Web\Pages;

use App\Models\Menu;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Menus\StoreController as MenusStoreController;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        // TODO Add authentication.
        // TODO Add form request.

        $user = User::where('id', $request->input('user_id'))->firstOrFail();
        $page = new Page([
            'name' => $request->input('name'),
            'published_at' => Carbon::now(),
        ]);
        $page->user()->associate($user);
        $page->save();
        $menu = new Menu([
            'path' => $request->input('path') ?? '',
            'title' => $request->input('title'),
            'weight' => $request->input('weight'),
            'published_at' => Carbon::now()
        ]);
        $menu->user()->associate($user);
        $page->menu()->save($menu);
        $menu->save();
    }
}
