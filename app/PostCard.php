<?php

namespace App;

class PostCard
{
    public static function resoloveFacade($name)
    {
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        return (self::resoloveFacade('PostCard'))->$method(...$arguments);
    }
}
