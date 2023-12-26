<?php

if (! function_exists('hexToRgb')) {

    /**
     * Converts a hex color string to an RGB array.
     *
     * @param  string  $hex The hex color string.
     * @return int[] Array of RGB values.
     */
    function hexToRgb(string $hex)
    {

        $hex = str_replace('#', '', strtoupper($hex));
        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1).substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1).substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1).substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }

        return [$r, $g, $b];
    }
}
