<?php

namespace Stingraydevelopment\Revisionable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stingraydevelopment\Revisionable\Skeleton\SkeletonClass
 */
class RevisionableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'revisionable';
    }
}
