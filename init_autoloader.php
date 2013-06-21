<?php

// Composer autoloading
if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}

/*
 * -----------------------------------------------------------------------------
 */
function _dump($value)
{
    error_log(print_r($value, true));
}