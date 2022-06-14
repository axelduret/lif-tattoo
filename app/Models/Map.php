<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Map extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** @var array<string> */
    protected $fillable = [
        'name',
        'zoom',
        'minZoom',
        'maxZoom',
        'center',
        'lat',
        'lng',
        'attributionControl',
        'trackResize',
        'boxZoom',
        'scrollWheelZoom',
        'touchZoom',
        'gestureHandling',
    ];

    /** @var array<string> */
    protected $hidden = [
        'id',
    ];

    /** @var array<string,string> */
    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('user');
    }

    public function pages(): MorphToMany
    {
        return $this->morphedByMany(Page::class, 'imageable');
    }

    public function map_layers(): MorphToMany
    {
        return $this->morphToMany(MapLayer::class, 'map_layerable');
    }
}
