<?php

namespace Z\FormBuddy;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Z\FormBuddy\FormBuddy
 */
class FormBuddyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'formbuddy';
    }
}
