<div class="main-header">
    <div class="main-header-logo">
            <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
            <img
                src="{{asset('assets/img/kaiadmin/logo_light.svg')}}"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
            />
            </a>
            <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
            </button>
            </div>
            <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav
    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
    >
        <div class="container-fluid">
            <nav
            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
            >
            <div class="input-group">
                <div class="input-group-prepend">
                <button type="submit" class="btn btn-search pe-1">
                    <i class="fa fa-search search-icon"></i>
                </button>
                </div>
                <input
                type="text"
                placeholder="Search ..."
                class="form-control"
                />
            </div>
            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                @include('admin.partials.dropdown.search')    

                @include('admin.partials.dropdown.notification')

                @include('admin.partials.dropdown.profile')
            </ul>
        </div>
    </nav>
</div>