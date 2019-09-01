<?php

if (! function_exists('statics')) {
    /**
     * Generate an admin_asset path for the application.
     *
     * @param  string  $path
     * @param  bool|null  $secure
     * @return string
     */
    function statics($path, $secure = null)
    {
        $path='statics/'.$path;
        return app('url')->asset($path, $secure);
    }
}