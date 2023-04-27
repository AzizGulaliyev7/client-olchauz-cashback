<?php

namespace Olchauz\CashbackAppClient\Facades;

use Illuminate\Support\Facades\Facade;

class CashbackAppClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'cashbackappclient';
    }
}
