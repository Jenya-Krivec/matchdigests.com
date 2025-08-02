<?php

namespace App\Helpers;

use App\Models\Bookmaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Components
{
    public static function isColorLight($hexColor, $threshold = 128):bool
    {
        $hexColor = str_replace('#', '', $hexColor);

        if (strlen($hexColor) == 6) {
            $r = hexdec(substr($hexColor, 0, 2));
            $g = hexdec(substr($hexColor, 2, 2));
            $b = hexdec(substr($hexColor, 4, 2));
        } elseif (strlen($hexColor) == 3) {
            $r = hexdec(substr($hexColor, 0, 1).substr($hexColor, 0, 1));
            $g = hexdec(substr($hexColor, 1, 1).substr($hexColor, 1, 1));
            $b = hexdec(substr($hexColor, 2, 1).substr($hexColor, 2, 1));
        } else {
            return false;
        }

        $luminance = (0.299 * $r + 0.587 * $g + 0.114 * $b);

        return $luminance > $threshold;
    }
}
