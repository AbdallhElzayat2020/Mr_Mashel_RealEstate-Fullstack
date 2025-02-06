<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold">QUDRAH</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
{{--        <li class="menu-item  open">--}}
{{--            <a href="javascript:void(0);" class="menu-link menu-toggle">--}}
{{--                <i class="menu-icon tf-icons ti ti-smart-home"></i>--}}
{{--                <div data-i18n="Dashboards">Dashboards</div>--}}
{{--                <div class="badge bg-label-primary rounded-pill ms-auto">3</div>--}}
{{--            </a>--}}
{{--            <ul class="menu-sub">--}}
{{--                <li class="menu-item active">--}}
{{--                    <a href="#" class="menu-link">--}}
{{--                        <div data-i18n="Analytics">Analytics</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="#" class="menu-link">--}}
{{--                        <div data-i18n="CRM">CRM</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="#" class="menu-link">--}}
{{--                        <div data-i18n="eCommerce">eCommerce</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

        <!-- Apps & Pages -->
{{--        <li class="menu-header small text-uppercase">--}}
{{--            <span class="menu-header-text">Home</span>--}}
{{--        </li>--}}

        <li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a href="{{route('admin.dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div data-i18n="Email">Home</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/blogs') ? 'active' : '' }}">
            <a href="{{route('admin.blogs.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div data-i18n="Home">Blogs</div>
            </a>
        </li>

    </ul>
</aside>
