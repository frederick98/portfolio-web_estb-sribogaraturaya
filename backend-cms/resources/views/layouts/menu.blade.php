<!-- need to remove -->
<style>
    li.nav-item::marker {
        unicode-bidi: unset !important;
        font-variant-numeric: unset !important;
        text-transform: unset;
    text-indent: unset !important;
    }
    li.nav-item.menu-is-opening.menu-open::marker {
        unicode-bidi: unset !important;
        font-variant-numeric: unset !important;
        text-transform: unset;
    text-indent: unset !important;
    }

    [class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active {
        background-color: #CC993E;
        color: #ffffff;
        font-weight: 300;
    }

    [class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active, [class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link.active:hover {
        background-color: #CC993E;
        color: #ffffff;
        font-weight: 300;
    }

    [class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link:hover {
        background-color: unset;
    }

    .nav-sidebar .menu-open > .nav-link svg.right, .nav-sidebar .menu-open > .nav-link i.right, .nav-sidebar .menu-is-opening > .nav-link svg.right, .nav-sidebar .menu-is-opening > .nav-link i.right {
    transform: rotate(-180deg);
}
</style>

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : ''}}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    <a href="{{url('banner')}}" class="nav-link {{ request()->is('banner','banner/create', 'banner/edit') ? 'active' : ''}}">
        <i class="nav-icon fa-solid fa-layer-group"></i>
        <p>Banner</p>
    </a>
    <a href="{{url('/about-us')}}" class="nav-link {{ request()->is('about-us', 'about-us/update', 'about-us/update/banner') ? 'active' : ''}}">
        <i class="nav-icon fa-solid fa-address-card"></i>
        <p>About Us</p>
    </a>
    <a href="{{url('news-insight')}}" class="nav-link {{ request()->is('news-insight', 'news-insight/create', 'news-insight/edit', 'news-insight/layout', '/news-insight/category', '/news-insight/topic') ? 'active' : ''}}">
        <i class="nav-icon fa-solid fa-rss"></i>
        <p>News & Insight</p>
    </a>
    <a href="{{url('company-picture')}}" class="nav-link {{ request()->is('company-picture', 'company-picture/create', 'company-picture/edit', 'company-picture/layout') ? 'active' : ''}}">
        <!-- <i class="nav-icon fa-solid fa-aperture"></i> -->
        <i class="nav-icon fa-solid fa-images"></i>
        <p>Company Picture</p>
    </a>
    <!-- <a href="#" class="nav-link ">
        <i class="nav-icon fa-solid fa-boxes-stacked"></i>
        <p>Our Subsidiaries</p>
    </a> -->
    <a href="{{route('business.list')}}" class="nav-link {{ request()->is('business', 'business/create', 'business/edit', 'business/layout') ? 'active' : ''}}">
        <i class="nav-icon fa-solid fa-briefcase"></i>
        <p>Our Business</p>
    </a>
    <a href="{{route('stories.list')}}" class="nav-link {{ request()->is('stories', 'stories/create', 'stories/edit', 'stories/layout') ? 'active' : ''}}">
        <i class="nav-icon fa-solid fa-clock-rotate-left"></i>
        <p>Our Story</p>
    </a>
    <!-- <a href="#" class="nav-link ">
        <i class="nav-icon fa-solid fa-flag"></i>
        <p>Our Leader</p>
    </a> -->
    <a href="{{route('achievement.list')}}" class="nav-link {{ request()->is('achievement', 'achievement/create', 'achievement/edit', 'achievement/layout') ? 'active' : ''}}">
        <!-- <i class="nav-icon fa-solid fa-square-star"></i> -->
        <i class="nav-icon fa-solid fa-star"></i>
        <p>Achievements</p>
    </a>
    <a href="{{route('contact.list')}}" class="nav-link {{ request()->is('contact-us', 'contact-us/export', 'contact-us/front-layout') ? 'active' : ''}}">
        <i class="nav-icon fa-solid fa-address-book"></i>
        <p>Contact Us</p>
    </a>

 {{-- <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-box"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-down"></i>
            </p>
          </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{url('news-insight/topic')}}" class="nav-link {{ request()->is('topic.list','topic.list/create', 'topic.list/edit') ? 'active' : ''}}">
                <i class="nav-icon fa-solid fa-imagess"></i>
                <p>Topik Berita</p>
            </a>
            </li>
        </ul>
    </li>

    </ul> --}}
</li>
