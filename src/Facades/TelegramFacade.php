<?php

namespace LaravelTelegram\Facades;

use Illuminate\Support\Facades\Facade;

class TelegramFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'telegram';
    }
}
