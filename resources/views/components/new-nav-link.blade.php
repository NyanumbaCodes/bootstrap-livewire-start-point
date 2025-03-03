@props(['route', 'title', 'bi_icon' => null, 'active' => false])
<li class="nav-item">
    <a href="{{ route($route) }}" class="nav-link {{ request()->routeIs($route) || $active ? 'active' : '' }}">
        @if ($bi_icon)
            <i class="nav-icon bi {{ $bi_icon }}"></i>
        @endif
        <p>
            {{ $title }}
        </p>
    </a>
</li>
