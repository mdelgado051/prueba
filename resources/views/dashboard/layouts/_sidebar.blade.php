<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid">
        </div>
        {{--<div class="sidebar-brand-text mx-3">{{ config('app.name', 'Site name') }}<sup></sup></div>--}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ url()->current() === route('dashboard.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Contenidos
    </div>

    <li class="nav-item {{ url()->current() === route('blog.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('blog.index') }}">
            <i class="fas fa-fw fa-blog"></i>
            <span>Blog</span></a>
    </li>

    <li class="nav-item {{ url()->current() === route('events.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('events.index') }}">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Eventos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>