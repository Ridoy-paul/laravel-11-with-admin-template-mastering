<?php
   
use Carbon\Carbon;


if (!function_exists('isActiveRoute')) {
    function isActiveRoute($routes)
    {
        return in_array(request()->route()->getName(), (array) $routes) ? 'active' : '';
    }
}