<?php

namespace App\Modules;

interface NavBarInterface
{
    public function link(string $route, string $label, string $link);
}
