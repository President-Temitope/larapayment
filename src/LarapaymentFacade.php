<?php

namespace Callmehalpha\Larapayment;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Callmehalpha\Larapayment\Larapayment
 */
class LarapaymentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larapayment';
    }
}
