
<div class="c-sidebar-brand">
    <img class="c-sidebar-brand-full" src="/assets/brand/coreui-base-white.svg" width="118" height="46" alt="CoreUI Logo">
    <img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo">
</div>
<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('dashboard') }}">
            <i class="c-sidebar-nav-icon cil-3d"></i>
            Dashboard
        </a>
    </li>
    <li class="c-sidebar-nav-dropdown">
        <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon cil-people"></i>
            Management Admin
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('user') }}">
                    <i class="c-sidebar-nav-icon cil-user"></i>
                    User
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('role') }}">
                    <i class="c-sidebar-nav-icon cil-meh"></i>
                    Role
                </a>
            </li>
        </ul>
    </li>
    <li class="c-sidebar-nav-dropdown">
        <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="c-sidebar-nav-icon cil-newspaper"></i>
        Management Posts</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('post') }}">
                    <i class="c-sidebar-nav-icon cil-notes"></i>
                    Post
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('tag') }}">
                    <i class="c-sidebar-nav-icon cil-tags"></i>
                    Tag
                </a>
            </li>
        </ul>
    </li>
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>