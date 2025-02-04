<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="{{route('main')}}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">Match</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('admin.product.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-edit"></em></span>
                            <span class="nk-menu-text">Product</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-upload"></em></span>
                            <span class="nk-menu-text">Import</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cart"></em></span>
                            <span class="nk-menu-text">Orders</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-list"></em></span>
                            <span class="nk-menu-text">Collect</span>
                        </a>
                    </li>
                    <li class="nk-menu-item active current-page">
                        <a href="{{route('admin.user.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                            <span class="nk-menu-text">Users</span>
                        </a>
                    </li>
                    
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>