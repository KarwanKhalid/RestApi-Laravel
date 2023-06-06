<?php

namespace Karwan\RestAPI\Facades;

use Illuminate\Support\Facades\Facade;
use Karwan\RestAPI\Routing\ApiRouter;

class ApiRoute extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ApiRouter::class;
    }
}
