<?php namespace gnusam\LaravelMondialRelay\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelMondialRelay
 * @package gnusam\LaravelMondialRelay\Facades
 */
class LaravelMondialRelay extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \gnusam\LaravelMondialRelay\Services\LaravelMondialRelay::class;
    }
}
