<?php

namespace CleaniqueCoders\OpenEmployee;

/*
 * This file is part of open-employee
 *
 * @license MIT
 * @package open-employee
 */

use Illuminate\Support\Facades\Facade;

class OpenEmployeeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'OpenEmployee';
    }
}
