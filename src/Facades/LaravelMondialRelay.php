<?php namespace Cephee\LaravelMondialRelay\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelMondialRelay
 * @package Cephee\LaravelMondialRelay\Facades
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
        return \Cephee\LaravelMondialRelay\Services\LaravelMondialRelay::class;
    }
}
