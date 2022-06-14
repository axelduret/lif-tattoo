<?php

namespace App\Http\Controllers\Web\Pages;

use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::where('id', $request->input('user_id'))->firstOrFail();
        $page = new Page;
        $page->name = $request->input('name');
        $page->title = $request->input('title') ?? $request->input('name');
        $page->path = $request->input('path') ?? '';
        $page->weight = $request->input('weight') ?? 1;
        $page->published_at = Carbon::now();
        $page->user()->associate($user);
        $page->save();
    }
}
