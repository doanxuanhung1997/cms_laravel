
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
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
        <svg class="c-sidebar-nav-icon">
            <use xlink:href="/icons/sprites/free.svg#cil-people"></use>
        </svg> Management Users</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('user') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/icons/sprites/free.svg#cil-user"></use>
                </svg> User</a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('role') }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="/icons/sprites/free.svg#cil-meh"></use>
                    </svg> Role
                    {{-- <span class="badge badge-danger">PRO</span> --}}
                </a>
            </li>
        </ul>
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
        <svg class="c-sidebar-nav-icon">
            <use xlink:href="/icons/sprites/free.svg#cil-newspaper"></use>
        </svg> Management Posts</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('post') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/icons/sprites/free.svg#cil-notes"></use>
                </svg> Post</a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('tag') }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="/icons/sprites/free.svg#cil-tags"></use>
                    </svg> Tag
                    {{-- <span class="badge badge-danger">Tag</span> --}}
                </a>
            </li>
        </ul>
    </li>
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>