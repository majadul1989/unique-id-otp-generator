<?php

namespace CoderOrbit\LaravelUniqueId\Facades;

use Illuminate\Support\Facades\Facade;

class UniqueId extends Facade {
    
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'unique-id';
    }
}