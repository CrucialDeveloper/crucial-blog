<?php

namespace CrucialDeveloper\CrucialBlog;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CrucialDeveloper\CrucialBlog\Skeleton\SkeletonClass
 */
class CrucialBlogFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'crucial-blog';
    }
}
