<li class="nav-item">
    <a href="{{ $url }}"
       class="nav-link {{ (request()->route()->getName() == $route) ? 'active' : '' }}">
        {{ $label }}
    </a>
</li>
