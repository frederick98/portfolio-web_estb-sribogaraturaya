<aside class="main-sidebar sidebar-dark-green elevation-3">
    <div class="brand-image">
        <a href="{{ route('home') }}" class="brand-image brand-link logo-switch top-sidebar img-fluid" style="text-align:center;">
            <img src="{{ asset('img/assets/logo.png')}}"
                alt="SRR Logo"
                class="brand-image">
            <!-- <span class="brand-text font-weight-light">{{ config('app.name') }}</span> -->
        </a>
    </div>
    <!-- <div class "sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-home"></i>
                <p>Our test</p>
            </a>
            </ul>
        </nav>
    </div> -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
        <div class="sidenav-divider mt-2">
        </div>
    </div>

</aside>
