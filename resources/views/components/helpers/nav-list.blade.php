<li class="nav-main-item">
    <a class="nav-main-link nav-main-link-submenu @if($request->is('features*')) active @endif" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="{{ route('features.index') }}">
        <i class="nav-main-link-icon fa fa-layer-group"></i>
        <span class="nav-main-link-name">Features</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link @if($request->is('features/languages*')) active @endif" href="{{ route('features.languages.index') }}">
                <span class="nav-main-link-name">Languages</span>
            </a>
        </li>
    </ul>
</li>
