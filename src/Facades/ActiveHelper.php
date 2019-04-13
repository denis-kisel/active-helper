<?php

namespace DenisKisel\ActiveHelper\Facades;

use Illuminate\Support\Facades\Facade;

class ActiveHelper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'activehelper';
    }
}
