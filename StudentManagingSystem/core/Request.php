<?php

class Request
{
    public static function uri()
    {
        // var_dump( trim(
        //     parse_url($_SERVER['PHP_SELF'], PHP_URL_PATH), '/'
        // ));
        return trim(
            parse_url($_SERVER['PHP_SELF'], PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}