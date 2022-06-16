<?php

namespace App\Http\Controllers\Web\Images;

use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Carbon;
use App\Services\ImageSizeService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;

class StoreController extends Controller
{
    public function __invoke(StoreImageRequest $request)
    {
        // TODO Add authentication.

        $file = '';
        $mimeType = '';
        $size = '';
        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('img/photo-page', 'public');
            $mimeType = $request->file('file')->getClientMimeType();
            $size = (new ImageSizeService)->get($request->file('file')->getSize());
        }
        $user = User::where('id', $request->input('user_id'))->firstOrFail();
        $image = new Image([
            'name' => $request->input('name'),
            'legend' => $request->input('legend'),
            'description' => $request->input('description'),
            'file' => $file,
            'format' => $mimeType,
            'size' => $size,
            'published_at' => Carbon::now(),
        ]);
        $image->user()->associate($user);
        $image->save();
    }
}
