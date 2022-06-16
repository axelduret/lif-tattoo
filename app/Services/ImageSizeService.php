<?php

namespace App\Services;

class ImageSizeService
{
    /**
     * @param  int $size
     * @return string
     */
    public function get(int $size): string
    {
        match (true) {
            $size <= 1024 => $size = number_format($size, 0) . ' octets',
            $size <= (1024 * 1024) => $size = number_format($size / 1024, 0) . ' Ko',
            $size > (1024 * 1024) => $size = number_format($size / (1024 * 1024), 1) . ' Mo',
        };
        return  $size;
    }
}
