<?php

namespace Vafa\Packagelearn\Facade;

use Illuminate\Support\Facades\Facade;

class Project extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'packagelearn';
    }
}