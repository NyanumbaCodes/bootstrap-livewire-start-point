@props(['route' => null, 'title', 'bi_icon' => null, 'active' => false])


<li class="nav-item {{ request()->routeIs($route) || $active ? 'menu-open' : '' }}">
    <a href="javascript:void(0)"
        class="nav-link {{ request()->routeIs($route) || $active ? 'active' : '' }}">
        @if ($bi_icon)
            <i class="nav-icon bi {{ $bi_icon }}"></i>
        @endif
        <p>
            {{ $title }}
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        {{ $slot }}
    </ul>
</li>
