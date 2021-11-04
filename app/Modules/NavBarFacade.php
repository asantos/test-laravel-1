<?php

namespace App\Modules;

use Illuminate\Support\Facades\Facade;

class NavBarFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'App\Modules\NavBar'; }
}
