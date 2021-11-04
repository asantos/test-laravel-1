<?php

namespace App\Modules;

class NavBar implements NavBarInterface
{
    public function link(string $route, string $label, string $link)
    {
        $url = route($route);
        return view('components.navbar.link', compact('route', 'label', 'url'));
    }
}
