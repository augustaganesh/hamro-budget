<?php
if (!function_exists('base_url')) {

    function base_url($path = '')
    {
        $path = trim($path, '/');
        $http = $_SERVER['REQUEST_SCHEME'];
        $serverName = $_SERVER['HTTP_HOST'];
        return $http . '/' . $path;
    }
}
